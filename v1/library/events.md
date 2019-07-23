### [Home](../../README.md) > Library > Events

# Upcoming Events


## Description
Returns up to four upcoming events taking place in the library.

**Data Steward:** Concordia University Library

**Update Frequency:** Live

## Call
GET library/events/

### Parameters
None

### Example(s)
*Returns up to four upcoming events taking place in the library*<br>
https://opendata.concordia.ca/API/v1/library/events/

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>When</td>
        <td>string</td>
        <td>Date for the event.</td>
    </tr>
    <tr>
        <td>Title</td>
        <td>string</td>
        <td>Official title for the event.</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>string</td>
        <td>Longer description for the event. Can be NULL</td>
    </tr>
    <tr>
        <td>Link</td>
        <td>string (URL)</td>
        <td>A link for futher information about the event. Can be NULL</td>
    </tr>
</table>

## Output
```JSON
"event":[
   {
        "when":"Upcoming Jul. 4",
        "title":"Raspberry Pi 101: Cat selfie machine",
        "description":{},
        "link":{}
    },
    {
        "when":"Upcoming Jul. 9",
        "title":"Intro to Linux",
        "description":{},
        "link":{}
    },
    {
        "when":"Upcoming Jul. 11",
        "title":"My First Twitter Bot",
        "description":{},
        "link":{}
    },
    {
        "when":"Upcoming Jul. 16",
        "title":"Online privacy basics",
        "description":{},
        "link":{}
    }
]
```

## Raw Data
Only available via the API