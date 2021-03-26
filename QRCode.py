import pyqrcode

s = "whaddup fellas ur awesome"

url = pyqrcode.create(s)

url.png("myqr.png", scale = 100)
url.show()