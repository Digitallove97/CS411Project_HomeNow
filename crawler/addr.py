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

    addr = html_x.xpath('//div[@class="address"]/span/text()')
    temp = ""
    for i in range(len(addr) - 1):
        temp += addr[i] + " "
    temp += addr[-1]
    addr = temp

    bed = html_x.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]/@data-beds')
    num_plan = len(bed)

    expression = re.compile(".*?location:.*?{.*?latitude:\s(.*?),.*?longitude:\s(.*?)\s*},", re.S)
    l_l = re.findall(expression, html)

    info = []
    for i in range(num_plan):
        temp = []
        temp.append(addr)
        temp.append(l_l[0][0])
        temp.append(l_l[0][1])
        info.append(temp)
    return info


#overall wrapping function
def main():
    url = "https://www.apartmentfinder.com/Illinois/Champaign-Apartments"
    html = get_html(url)
    for i in range(2, 24):
        url = "https://www.apartmentfinder.com/Illinois/Champaign-Apartments/Page" + str(i)
        html += get_html(url)

    all_apt = parse_main_page(html)
    for apt in all_apt:
        print("processing " + apt[1])
        apt_html = get_html(apt[0])
        apt_info = parse_apt(apt_html)
        #print(apt_info)
        apt.append(apt_info)
    rows = []
    for apt in all_apt:
        for i in range(len(apt[2])):
            row = []
            row.append(apt[1] + "_"+ str(i))
            for attr in apt[2][i]:
                row.append(attr)
            rows.append(row)

    title = ["addr_name", "addr_pin", "addr_longi", "addr_lati"]
    with open('addr.csv','w') as f:
        f_csv = csv.writer(f)
        f_csv.writerow(title)
        f_csv.writerows(rows)

#main()

problem = get_html("https://www.apartmentfinder.com/Illinois/Champaign-Apartments/1702-Maynard-Dr-Apartments-9dc92q7")
print(parse_apt(problem))
