### [Home](../../README.md) > Library > Hours

# Opening Hours


## Description
Provides the operating hours of library services for a given date.

**Data Steward:** Concordia University Library

**Update Frequency:** Live

## Call
GET library/hours/{date}

### Parameters
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>Date</td>
        <td>A date string using the format YYYY-MM-DD. (Required)</td>
    </tr>
</table>

### Example(s)
*Returns the operating hours of all library services on June 28th, 2019*<br>
https://opendata.concordia.ca/API/v1/library/hours/2019-06-28

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>service</td>
        <td>string</td>
        <td>Name of the library service.</td>
    </tr>
    <tr>
        <td>text</td>
        <td>string</td>
        <td>Hours between which the service is open.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "service": "Webster Library",
        "text": "9 AM to 10 PM"
    },
    {
        "service": "Reference Desk",
        "text": "9 AM to 5 PM"
    },
    {
        "service": "Loans and Returns",
        "text": "9 AM to 5 PM"
    },
    {
        "service": "Interlibrary Loans",
        "text": "9 AM to 5 PM"
    },
    {
        "service": "Technology Sandbox",
        "text": "10 AM to 6 PM"
    },
    {
        "service": "Vanier Library",
        "text": "9 AM to 10 PM"
    },
    {
        "service": "Special Collections",
        "text": "9 AM to 5 PM"
    },
    {
        "service": "Grey Nuns",
        "text": "Closed - 24h"
    }
]
```

## Raw Data
Only available via the API