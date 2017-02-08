import requests
import simplejson as json

payload = {'titre': 'text'}
r = requests.post("http://192.168.1.3:4567", data=json.dumps(payload))