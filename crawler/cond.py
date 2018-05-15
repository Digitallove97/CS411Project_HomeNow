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

# parse ecah apartment's html and return bed_num, bath_num and rent_range
# return a list of lists in form [bed_num, bath_num, rent_range]
# notice that each list is a different floor plan
def parse_apt(html):
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


#overall wrapping function
def main():
    url = "https://www.apartmentfinder.com/Illinois/Champaign-Apartments"
    html = get_html(url)
    for i in range(2, 23):
        url = "https://www.apartmentfinder.com/Illinois/Champaign-Apartments/Page" + str(i)
        html += get_html(url)

    all_apt = parse_main_page(html)
    #print(all_apt)
    for apt in all_apt:
        print("processing " + apt[1])
        apt_html = get_html(apt[0])
        apt_info = parse_apt(apt_html)
        print(apt_info)
        apt.append(apt_info)

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

    title = ["cond_name", "cond_bed", "cond_bath", "cond_rent", "cond_amen"]
    with open('cond_final.csv','w') as f:
        f_csv = csv.writer(f)
        f_csv.writerow(title)
        f_csv.writerows(rows)

main()

#problem = get_html("https://www.apartmentfinder.com/Illinois/Champaign-Apartments/703-W-Park-Ave-Apartments-3evzxxd")
#parse_apt(problem)
