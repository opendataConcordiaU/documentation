### [Home](../../README.md) > Library > Room List

# Room List


## Description
A list of all “bookable” resources in the library including group study rooms, presentation rooms, workstations, and scanners. This method is normally used to obtain the resource identifier and schedule identifier needed to make the call to get the [real-time availability of the resource](./reservations.md).

**Data Steward:** Concordia University Library

**Update Frequency:** Live

## Call
GET library/rooms/getRoomsList

### Parameters
None

### Example(s)
*Returns a full listing of the resources available to book at the library*<br>
https://opendata.concordia.ca/API/v1/library/rooms/getRoomsList

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>resourceID</td>
        <td>integer</td>
        <td>Unique ID for the reource.</td>
    </tr>
    <tr>
        <td>name</td>
        <td>string</td>
        <td>Name of the resouce in the booking system.</td>
    </tr>
    <tr>
        <td>scheduleID</td>
        <td>integer</td>
        <td>Unique ID for the schedule associated with the resource.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "resourceID": "52",
        "name": "ArcGIS - Webster Library Workstation W-229",
        "scheduleID": "7"
    },
    {
        "resourceID": "31",
        "name": "Grey Nuns B.101",
        "scheduleID": "3"
    },
    {
        "resourceID": "49",
        "name": "Vanier Library Microform Scanner",
        "scheduleID": "6"
    },
    {
        "resourceID": "12",
        "name": "Vanier Library VL 301-20",
        "scheduleID": "2"
    },
    {
        "resourceID": "53",
        "name": "Webster Library LB-351 (Netherlands)",
        "scheduleID": "1"
    },
    ...
]
```

## Raw Data
Only available via the API