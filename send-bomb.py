import requests

for i in range(98):
    url = f"https://tdmteam.store/sms-bomb-v2/sms/api{i}.php?phone="
    
    response = requests.get(url)
    http_status = response.status_code
    response_text = response.text
    
    print(f"URL{i}: {url}")
    print(f"HTTP Status Code: {http_status}")
    print(f"Response: {response_text}\n")
