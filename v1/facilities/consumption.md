### [Home](../../README.md) > Facilities > Consumption

# Consumption


## Description
Returns a list with meter readings on the electrical demand, gas and water consumption for the specified period of time. By using the [point list](./pointlist.md) identifier in conjunction with this method, users are able to interpret the various meter readings that are returned.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Daily

## Call
GET facilities/consumption/filter/{starttime}/{endtime}

### Parameters
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>starttime</td>
        <td>Specifies the start date and time for the readings. (Required YYYY-MM-DD HH:MM:SS)</td>
    </tr>
    </tr>
        <tr>
        <td>endtime</td>
        <td>Specifies the end date and time for the readings. (Required YYYY-MM-DD HH:MM:SS) </td>
    </tr>
</table>

### Example(s)
*Obtain consumption data from April 9th, 2019 between 9:40 and 10:40 AM*
https://opendata.concordia.ca/API/v1/facilities/consumption/filter/2019-04-09 9:40:00/2019-04-09 10:40:17

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Date</td>
        <td>datetime</td>
        <td>Date and time for the meter reading. (YYYY-MM-DD HH:MM:SS.mmm)</td>
    </tr>
    <tr>
        <td>Point_6</td>
        <td>real</td>
        <td>Electrical demand of the EV, GM, MB and TD buildings (kW).</td>
    </tr>
    <tr>
        <td>Point_7</td>
        <td>real</td>
        <td>Electrical demand of the EV building (kW).</td>
    </tr>
    <tr>
        <td>Point_8</td>
        <td>real</td>
        <td>Gas Consumption of the EV, GM and MB buildings (m3).</td>
    </tr>
    <tr>
        <td>Point_9</td>
        <td>real</td>
        <td>Gas Consumption of the GM building (m3).</td>
    </tr>
    <tr>
        <td>Point_10</td>
        <td>integer</td>
        <td>Municipal water supply meter (m3).</td>
    </tr>
    <tr>
        <td>Point_12</td>
        <td>real</td>
        <td>Electrical demand of Loyola Campus (kW).</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "Date": "2019-04-09 10:00:00.000",
        "Point_6": "No Data",
        "Point_7": "2567.00",
        "Point_8": "886800.0000",
        "Point_9": "113843.8047",
        "Point_10": "2283",
        "Point_12": "4995.09"
    },
    {
        "Date": "2019-04-09 09:40:17.000",
        "Point_6": "4666.67",
        "Point_7": "2637.00",
        "Point_8": "884100.0000",
        "Point_9": "113380.3828",
        "Point_10": "2278",
        "Point_12": "4940.14"
    },
    {
        "Date": "2019-04-09 10:40:17.000",
        "Point_6": "No Data",
        "Point_7": "2866.00",
        "Point_8": "890200.0000",
        "Point_9": "114352.4375",
        "Point_10": "2290",
        "Point_12": "4742.02"
    }
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/DATA_OUTPUT.csv