import urllib.request

user = 'YOUR USERID'
key = 'YOUR KEY'

endpoints = {
    'description': ['course_id'],
    'catalog': ['subject', 'catalog', 'career'],
    'section': ['subject', 'catalog'],
    'schedule': ['course_id', 'subject', 'catalog'],
    'session': ['career', 'term', 'session'],
    'faculty': ['faculty', 'department'],
}


def openConnection(username, password):
    '''Set up authentication and open connection'''
    API_url = "https://opendata.concordia.ca"
    password_mgr = urllib.request.HTTPPasswordMgrWithDefaultRealm()
    password_mgr.add_password(None, API_url, username, password)
    handler = urllib.request.HTTPBasicAuthHandler(password_mgr)
    opener = urllib.request.build_opener(handler)
    opener.open(API_url)
    urllib.request.install_opener(opener)


def validateRequest(endpoint, params):
    '''Validate that a valid argument with the correct number of parameters has been supplied.'''
    if endpoint not in endpoints:
        helpInfo = ', '.join(endpoints.keys())
        print(f'Invalid endpoint. Please use one of the following: {helpInfo}')
        return False
    elif len(params) != len(endpoints[endpoint]):
        helpInfo = ', '.join(endpoints[endpoint])
        print(f'Invalid params. {endpoint} requires the following: {helpInfo}')
    else:
        return True


def makeRequest(endpoint, *args):
    '''Make request and return the response after validation'''
    if validateRequest(endpoint, args):
        params = '/'.join(args)
        url = f'https://opendata.concordia.ca/API/v1/course/{endpoint}/filter/{params}'
        with urllib.request.urlopen(url) as req:
            res = req.read()
        return res
    else:
        return False


if __name__ == "__main__":
    openConnection(user, key)
    response = makeRequest('session', '*', '*', '*')
    print(response)
