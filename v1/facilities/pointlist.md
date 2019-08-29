### [Home](../../README.md) > Facilities > Point List

# Point List


## Description
Returns a list with the details of the systems used to collect the [environmental](./environmental.md) and [consumption](./consumption.md) data obtained from sensors and meters located on both campuses. By using the point identifier in conjunction with the other methods, users are able to interpret the various sesnor and meter readings that are retturned.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Nightly

## Call
GET facilities/pointlist/

### Parameters
None

### Example(s)
*Obtain the detailed information for all sensors and meters on both campuses*<br/>
https://opendata.concordia.ca/API/v1/facilities/pointlist

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Point_Identifier</td>
        <td>string</td>
        <td>Unique identifier for the point. Used as a foreign key for the environmental and consumption methods.</td>
    </tr>
    <tr>
        <td>System_Name</td>
        <td>string</td>
        <td>Name of the point in the system.</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>string</td>
        <td>Description of the sensor or meter explaining what it actually measures.</td>
    </tr>
    <tr>
        <td>Building</td>
        <td>string</td>
        <td>Two letter code for the building where the point is located. (EV, GM, SP)</td>
    </tr>
    <tr>
        <td>Floor</td>
        <td>string</td>
        <td>Floor where the point is located in the building.</td>
    </tr>
    <tr>
        <td>Room_Location</td>
        <td>string</td>
        <td>Room where the point is located.  Currently always returns NULL.</td>
    </tr>
    <tr>
        <td>Type_of_Measurement</td>
        <td>string</td>
        <td>Specific description of the type of measurement being reported. (Solar Irradiance, Relative Humidity, Air Temperature, Wind Direction, Wind Speed, Electrical Power, Natural Gas Volume, Water Flow)</td>
    </tr>
    <tr>
        <td>Units</td>
        <td>string</td>
        <td>Describes the unit of measurement used by the point.</td>
    </tr>
    <tr>
        <td>Sensor_Type</td>
        <td>string</td>
        <td>Describes the type of sensor being used to obtain the measurment. (Pyrometer, Ceramic - heated, RTD, Ultrasonic, Voltage and Current Transducers, Gas Turbine, Turbine type flow meter)</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "Point_Identifier": "Point_1",
        "System_Name": "MHL1-017.IC",
        "Description": "Outdoor Temperature Sensor of EV weather station",
        "Building": "EV",
        "Floor": "17M",
        "Room_Location": null,
        "Type_of_Measurement": "Solar Irradiance",
        "Units": "W/m2",
        "Sensor_Type": "Pyrometer"
    },
    {
        "Point_Identifier": "Point_2",
        "System_Name": "MHX1-017.IC",
        "Description": "Outdoor Humidity Sensor of EV weather station",
        "Building": "EV",
        "Floor": "17M",
        "Room_Location": null,
        "Type_of_Measurement": "Relative Humidity",
        "Units": "% Relative Humidity",
        "Sensor_Type": "Ceramic - heated"
    },
...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/POINT_LIST.csv
