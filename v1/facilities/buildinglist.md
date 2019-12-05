### [Home](../../README.md) > Facilities > Building List

# Building List


## Description
Returns a list with the details of all the buildings located on both campuses. Can be used with other endpoint methods, such as the [course schedule](../courses/schedule.md) BuildingCode field, to identify a building location.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Annually (manual)

## Call
GET facilities/buildinglist/

### Parameters
None

### Example(s)
*Obtain the detailed information for all buildings on both campuses*<br/>
https://opendata.concordia.ca/API/v1/facilities/buildinglist/

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Campus</td>
        <td>string</td>
        <td>Three letter code identifying the campus location of the building. (LOY, SGW)</td>
    </tr>
    <tr>
        <td>Building</td>
        <td>string</td>
        <td>Two letter code for the building. (EV, GM, SP)</td>
    </tr>
    <tr>
        <td>Building_Name</td>
        <td>string</td>
        <td>Name for the building.</td>
    </tr>
    <tr>
        <td>Building_Long_Name</td>
        <td>string</td>
        <td>Descriptive name of the building.</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>string</td>
        <td>Civic adress of the building.</td>
    </tr>
    <tr>
        <td>Latitude</td>
        <td>string</td>
        <td>Decimal degrees (DD) latitude for the building location.</td>
    </tr> 
    <tr>
        <td>Longitude</td>
        <td>string</td>
        <td>Decimal degrees (DD) longitude for the building location.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "Campus":"LOY",
        "Building":"AD",
        "Building_Name":"AD Building",
        "Building_Long_Name":"Administration Building",
        "Address":"7141, Sherbrooke West",
        "Latitude":"45.457984",
        "Longitude":"-73.639834"
    },
    {
        "Campus":"SGW",
        "Building":"B",
        "Building_Name":"B Building",
        "Building_Long_Name":"B Annex",
        "Address":"2160 Bishop Street",
        "Latitude":"45.497856",
        "Longitude":"-73.579588"
    },
...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/BUILDING_LIST.csv
