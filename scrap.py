from bs4 import BeautifulSoup as bs
import requests

url="https://www.turfoo.fr/programmes-courses/"
response = requests.get(url)

html = response.content

soup = bs(html, "lxml")