import urllib.request
import requests
import re

def get_list_apt(url):
    response = requests.get(url)
    if response.status_code == 200:
        return response.text
    return None

def parse_main_page(html):
    expression = re.compile("<a\shref=\"(.*?)\".*?title=\"(.*?)\".*?>", re.S)
    items = re.findall(expression, html)
    print(items)

def main():
    url = "https://www.apartmentfinder.com/q/?cd=jyv8q2omzJpyih0n7E"
    html = get_list_apt(url)
    parse_main_page(html)

main()
