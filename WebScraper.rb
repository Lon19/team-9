require 'httparty'

url = 'http://api.scraperapi.com'
query = {
  'api_key' => '9459b08ba4b88c3b0601c0765d602d2e',
  'url' => 'http://httpbin.org/ip'
}

response = HTTParty.get('http://api.scraperapi.com', query: query)
results = response.body
puts results