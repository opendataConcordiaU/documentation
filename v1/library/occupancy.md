### [Home](../../README.md) > Library > Occupancy

# Occupancy


## Description
Real time estimate of people inside the library different buildings based on data collected by the thermal and optical sensors placed in the different doors. Some values may return negative numbers as the counters reset at midnight when some people may still be in the library.

**Data Steward:** Concordia University Library

**Update Frequency:** Live

## Call
GET library/occupancy/

### Parameters
None

### Example(s)
*Obtain current occupancy for the Webster and Vanier libraraies as well as the Grey Nuns reading room.*
https://opendata.concordia.ca/API/v1/library/occupancy/

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Webster</td>
        <td>array</td>
        <td>
            <table>
                <tr>
                    <td>Occupancy</td>
                    <td>integer</td>
                    <td>Estimated count of people in the Webster library</td>
                </tr>
                <tr>
                    <td>LastRecordTime</td>
                    <td>datetime</td>
                    <td>Date and time of the last reading from the sensors (YYYY-MM-DD HH:MM:SS)</td>
                </tr>
            </table>
        </td>
    </tr>
        </td>
    </tr>
    <tr>
        <td>Vanier</td>
        <td>array</td>
        <td>
            <table>
                <tr>
                    <td>Occupancy</td>
                    <td>integer</td>
                    <td>Estimated count of people in the Vanier library</td>
                </tr>
                <tr>
                    <td>LastRecordTime</td>
                    <td>datetime</td>
                    <td>Date and time of the last reading from the sensors (YYYY-MM-DD HH:MM:SS)</td>
                </tr>
            </table>        
        </td>
    </tr>
    <tr>
        <td>GreyNuns</td>
        <td>array</td>
        <td>
            <table>
                <tr>
                    <td>Occupancy</td>
                    <td>integer</td>
                    <td>Estimated count of people in the Grey Nuns reading room</td>
                </tr>
                <tr>
                    <td>LastRecordTime</td>
                    <td>datetime</td>
                    <td>Date and time of the last reading from the sensors (YYYY-MM-DD HH:MM:SS)</td>
                </tr>
            </table>          
        </td>
    </tr>
</table>

## Output
```JSON
{
    "Webster": {
        "Occupancy": "367.0000",
        "LastRecordTime": "2018-08-27 16:45:00.000"
    },
    "Vanier": {
        "Occupancy": "104.0000",
        "LastRecordTime": "2018-08-27 16:15:00.000"
    },
    "GreyNuns": {
        "Occupancy": "-5.0000",
        "LastRecordTime": "2018-08-27 16:45:00.000"
    }
}
```

## Raw Data
Only available via the API