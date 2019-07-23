### [Home](../../README.md) > Facilities > Environmental

# Environmental


## Description
Returns a list with sensors measurements for outdoor temperature, humidity, wind direction and speed for a given time period. By using the [point list](./pointlist.md) identifier in conjunction with this method, users are able to interpret the various sensor readings that are returned.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Daily

## Call
GET facilities/environmental/filter/{starttime}/{endtime}

### Parameters
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>starttime</td>
        <td>Specifies the start date and time for the readings. (required YYYY-MM-DD HH:MM:SS)</td>
    </tr>
    </tr>
        <tr>
        <td>endtime</td>
        <td>Specifies the end date and time for the readings. (Required YYYY-MM-DD HH:MM:SS)</td>
    </tr>
</table>

### Example(s)
*Obtain environmental data from March 15th, 2019*
https://opendata.concordia.ca/API/v1/facilities/environmental/filter/2019-3-15 00:00:00/2019-3-16 00:00:00

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
        <td>Date and time for the sensor reading. (YYYY-MM-DD HH:MM:SS.mmm)</td>
    </tr>
    <tr>
        <td>Point_1</td>
        <td>real</td>
        <td>Outdoor Temperature Sensor of EV weather station (W/m2).</td>
    </tr>
    <tr>
        <td>Point_2</td>
        <td>real</td>
        <td>Outdoor Humidity Sensor of EV weather station (% Relative Humidity).</td>
    </tr>
    <tr>
        <td>Point_3</td>
        <td>real</td>
        <td>Outdoor Temperature Sensor of EV weather station (Deg C).</td>
    </tr>
    <tr>
        <td>Point_4</td>
        <td>integer</td>
        <td>Wind Direction Sensor of EV weather station (Degrees from North).</td>
    </tr>
    <tr>
        <td>Point_5</td>
        <td>real</td>
        <td>Wind Speed Sensor of EV weather station (m/s).</td>
    </tr>
    <tr>
        <td>Point_11</td>
        <td>real</td>
        <td>Outdoor Temperature Sensor of the SP (Deg C).</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "Date":"2019-03-15 00:00:00.000",
        "Point_1":" -0.4",
        "Point_2":"57.5",
        "Point_3":"7.5",
        "Point_4":"207",
        "Point_5":"6.22",
        "Point_11":"No Data"
    },
    {
        "Date":"2019-03-15 01:00:00.000",
        "Point_1":" -0.4",
        "Point_2":"61.2",
        "Point_3":"7.4",
        "Point_4":"232",
        "Point_5":"5.57",
        "Point_11":"No Data"
    },
    {
        "Date":"2019-03-15 02:00:00.000",
        "Point_1":" -0.4",
        "Point_2":"66.3",
        "Point_3":"7.3",
        "Point_4":"199",
        "Point_5":"1.67",
        "Point_11":"No Data"
    },
    {
        "Date":"2019-03-15 03:00:00.000",
        "Point_1":" -0.4",
        "Point_2":"71.2",
        "Point_3":"7.1",
        "Point_4":"195",
        "Point_5":"5.48",
        "Point_11":"No Data"
    },
    ...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/DATA_OUTPUT.csv