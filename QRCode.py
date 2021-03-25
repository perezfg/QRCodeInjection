import pyqrcode

s = "whaddup fellas"

url = pyqrcode.create(s)

url.png("myqr.png", scale = 100)
url.show()