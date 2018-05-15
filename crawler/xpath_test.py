from lxml import etree
import re
text = '''
<div class="content">
<ul>
<li>Pool/Clubhouse Wi-Fi</li>
<li>Controlled Access</li>
<li>On-Site Property Manager</li>
<li>Concierge</li>
<li>Available 24/7</li>
<li>Furnished Apartments</li>
<li>Social Events</li>
<li>Elevator</li>
<li>Business Center</li>
<li>Clubhouse</li>
<li>Complimentary Breakfast</li>
<li>Executive Housing</li>
<li>Tanning Salon</li>
<li>Gated</li>
<li>Yard with Fence</li>
<li>Courtyard</li>
<li>Fitness Center</li>
<li>Cardio Machines</li>
<li>Free Weight Equipment</li>
<li>Weightlifting Equipment</li>
<li>Sauna</li>
<li>Spa</li>
<li>Swimming Pool</li>
<li>Gaming Areas</li>
</ul>
</div>
'''
html = etree.parse("./apartment_example.html", etree.HTMLParser())
#addr = html.xpath('//p[@class="propertyAddress"]/text()')
#print("".join(addr[0].split()))

with open("apartment_example.html", "r") as my_html:
    data = my_html.read()

#expression = re.compile(".*?location:.*?{.*?latitude:\s(.*?),.*?longitude:\s(.*?)\s*},", re.S)
#items = re.findall(expression, data)
#print(items)
#result = html.xpath('//section[@id="features-amenities"]//li/text()')

bed = html.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]/@data-beds | //div[contains(@id, "floorplanTabContainer")]//div[contains(@class, "row rentalGridRow")]/@data-beds')
bath = html.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]/@data-baths | //div[contains(@id, "floorplanTabContainer")]//div[contains(@class, "row rentalGridRow")]/@data-baths')
rent = html.xpath('//div[contains(@class, "availability-table")]//div[contains(@class, "row rentalGridRow")]//div[contains(@class, "rent")]/text() | //div[contains(@class, "rentRange")]/text()')

for i in range(len(rent)):
    rent[i] = rent[i].strip()

print(bed, bath, rent)

star = html.xpath('//div[@class="rating"]/@content')
contact = html.xpath('//span[@class="contactPhone"]/text()')
image_re = re.compile(".*?galleryCollection:.*?Uri\":\"(.*?)\"")
image_url = re.findall(image_re, data)
print(star, contact, image_url)


def apt_parser(html):
    html_x = etree.HTML(html)
    star = html_x.xpath('//div[@class="rating"]@content')
    print(star)


#print(re.sub(".*\$", "", rent[0]).replace(",",""))
