import urllib.request

user = "YOUR USERID"
key = "YOUR KEY"

endpoints = {
    "pointlist": {"params": []},
    "environmental": {
        "params": ["start as 'YYYY-MM-DD HH:MM:SS'", "end as 'YYYY-MM-DD HH:MM:SS'"],
        "path": "environmental/filter",
    },
    "consumption": {
        "params": ["start as 'YYYY-MM-DD HH:MM:SS'", "end as 'YYYY-MM-DD HH:MM:SS'"],
        "path": "consumption/filter",
    },
}


def openConnection(username, password):
    """Set up authentication and open connection"""
    API_url = "https://opendata.concordia.ca"
    password_mgr = urllib.request.HTTPPasswordMgrWithDefaultRealm()
    password_mgr.add_password(None, API_url, username, password)
    handler = urllib.request.HTTPBasicAuthHandler(password_mgr)
    opener = urllib.request.build_opener(handler)
    opener.open(API_url)
    urllib.request.install_opener(opener)


def validateRequest(endpoint, params):
    """Validate that a valid argument with the correct number of parameters has been supplied."""
    if endpoint not in endpoints:
        helpInfo = ", ".join(endpoints.keys())
        print(f"Invalid endpoint. Please use one of the following: {helpInfo}")
        return False
    elif len(params) != len(endpoints[endpoint]["params"]):
        helpInfo = ", ".join(endpoints[endpoint]["params"])
        print(f"Invalid params. {endpoint} requires the following: {helpInfo}")
    else:
        return True


def makeRequest(endpoint, *args):
    """Make request and return the response after validation"""
    if validateRequest(endpoint, args):
        params = "/".join(args).replace(" ", "%20")
        path = (
            endpoints[endpoint]["path"] if "path" in endpoints[endpoint] else endpoint
        )
        url = f"https://opendata.concordia.ca/API/v1/facilities/{path}/{params}"
        with urllib.request.urlopen(url) as req:
            res = req.read()
        return res
    else:
        return False


if __name__ == "__main__":
    openConnection(user, key)
    response = makeRequest(
        "environmental", "2019-07-01 12:00:00", "2019-07-02 12:00:00"
    )
    print(response)
