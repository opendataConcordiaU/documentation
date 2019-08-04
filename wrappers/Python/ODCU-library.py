# TODO: remove userid/key

import urllib.request

user = "YOUR USERID"
key = "YOUR KEY"

endpoints = {
    "occupancy": {"params": []},
    "computers": {"params": []},
    "events": {"params": []},
    "hours": {"params": ["date"]},
    "room_list": {"params": [], "path": "rooms/getRoomsList"},
    "reservations": {
        "params": ["resourceID", "scheduleID"],
        "path": "rooms/getRoomReservations",
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
        params = "/".join(args)
        path = (
            endpoints[endpoint]["path"] if "path" in endpoints[endpoint] else endpoint
        )
        url = f"https://opendata.concordia.ca/API/v1/library/{path}/{params}"
        with urllib.request.urlopen(url) as req:
            res = req.read()
        return res
    else:
        return False


if __name__ == "__main__":
    openConnection(user, key)
    response = makeRequest("reservations", "*", "*")
    print(response)
