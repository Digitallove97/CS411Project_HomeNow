from lxml import etree
import urllib.request
import requests
import csv
import re

# method for connecting the website and get its html
def get_html(url):
    response = requests.get(url)
    if response.status_code == 200:
        return response.text
    return None


# method for getting all apartment name and corresponding URL
# return list of lists in [URL, apt_name] format
def parse_main_page(html):
    expression = re.compile("<!--Listing\sInformation-->.*?<a\shref=\"(.*?)\".*?title=\"(.*?)\".*?>", re.S)
    items = re.findall(expression, html)
    output = open("url_apt.txt", "w+")
    for i in items:
        for j in i:
            output.write(j + " ")
        output.write("\n")
    for i in range(len(items)):
        items[i] = list(items[i])
    return items

# parse ecah apartment's html and return bed_num, bath_num, rent_range and amenities
# return a list of lists in form [bed_num, bath_num, rent_range, amenities]
# notice that each list is a different floor plan
def cond_parser(html):
    html_x = etree.HTML(html)
    amenities = html_x.xpath('//section[@id="features-amenities"]//li/text()')
    #print(amenities)
    all_amenities = ""
    if amenities != []:
        for i in range(len(amenities) - 1):
            all_amenities += amenities[i] + ", "
        all_amenities += amenities[-1]

    bed = html_x.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]/@data-beds | //div[contains(@id, "floorplanTabContainer")]//div[contains(@class, "row rentalGridRow")]/@data-beds')
    bath = html_x.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]/@data-baths | //div[contains(@id, "floorplanTabContainer")]//div[contains(@class, "row rentalGridRow")]/@data-baths')
    rent = html_x.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]//div[contains(@class, "rent")]/text() | //div[contains(@class, "rentRange")]/text()')

    for i in range(len(rent)):
        rent[i] = rent[i].strip()
        rent[i] = re.sub(".*\$", "", rent[i]).replace(",","")
    info = []
    for i in range(len(bed)):
        temp = []
        temp.append(bed[i])
        temp.append(bath[i])
        if rent != []:
            temp.append(rent[i])
        else:
            temp.append(str(0))
        temp.append(all_amenities)
        info.append(temp)
    return info


def addr_parser(html):
    html_x = etree.HTML(html)

    addr = html_x.xpath('//div[@class="address"]/span/text()')
    temp = ""
    for i in range(len(addr) - 1):
        temp += addr[i] + " "
    temp += addr[-1]
    addr = temp

    expression = re.compile(".*?location:.*?{.*?latitude:\s(.*?),.*?longitude:\s(.*?)\s*},", re.S)
    l_l = re.findall(expression, html)

    info = []
    info.append(addr)
    info.append(l_l[0][0])
    info.append(l_l[0][1])

    return info


def apt_parser(html):
    html_x = etree.HTML(html)
    star = html_x.xpath('//div[@class="rating"]/@content')
    contact = html_x.xpath('//span[@class="contactPhone"]/text()')

    image_re = re.compile(".*?galleryCollection:.*?Uri\":\"(.*?)\"")
    image_url = re.findall(image_re, html)

    info = []
    if star != []:
        info.append(star[0])
    else:
        info.append(str(0))
    if contact != []:
        info.append(contact[0])
    else:
        info.append(str(0))
    if image_url != []:
        info.append(image_url[0])
    else:
        image_url = html_x.xpath('//meta[@property="og:image"]/@content')
        if image_url == []:
            info.append(str(0))
        else:
            info.append(image_url[0])

    return info


#overall wrapping function
def main():
    url = "https://www.apartmentfinder.com/Illinois/Champaign-Apartments"
    html = get_html(url)
    for i in range(2, 24):
        url = "https://www.apartmentfinder.com/Illinois/Champaign-Apartments/Page" + str(i)
        html += get_html(url)

    all_apt = parse_main_page(html)
    #print(all_apt)
    for apt in all_apt:
        print("processing " + apt[1])
        apt_html = get_html(apt[0])
        apt_cond = cond_parser(apt_html)
        apt_addr = addr_parser(apt_html)
        apt_apt = apt_parser(apt_html)
        for floor in apt_cond:
            for item in apt_addr:
                floor.append(item)
            for item in apt_apt:
                floor.append(item)
        apt.append(apt_cond)
    #print(all_apt[0])

    rows = []
    for apt in all_apt:
        #print(apt[2]) #list of condition
        for floor_plan in apt[2]:
            row = []
            #apt[1] #apt_name
            row.append(apt[1] + "_" + floor_plan[0] + "b" + floor_plan[1] + "b")
            for item in floor_plan:
                row.append(item)
        rows.append(row)

    title = ["name", "cond_bed", "cond_bath", "cond_rent", "cond_amen", "addr_pin", "addr_longi", "addr_lati", "apt_rating", "apt_contact", "apt_image"]
    with open('all_in_one.csv','w') as f:
        f_csv = csv.writer(f)
        f_csv.writerow(title)
        f_csv.writerows(rows)

main()

#problem = get_html("https://www.apartmentfinder.com/Illinois/Champaign-Apartments/Healey-Townhomes-Apartments-gelz18z")

#apt_cond = cond_parser(problem)
#apt_addr = addr_parser(problem)
#for floor in apt_cond:
#    for item in apt_addr:
#        floor.append(item)

#print(apt_cond)

#print(apt_addr)

#print(apt_parser(problem))
