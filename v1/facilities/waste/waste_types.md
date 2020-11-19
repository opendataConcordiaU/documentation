### [Home](../../../README.md) > Facilities > waste > Waste Type

# Waste Type


## Description
Returns a list of the different types of waste being disposed of as part of the [Zero Waste Concordia Program](https://www.concordia.ca/about/sustainability/sustainability-initiatives/zero-waste/zero-waste-program.html).  This method provides additional information from what is available via the [invoices](./invoices.md) method.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Monthly (manual)

## Call
GET facilities/facilities/waste/waste_type

### Parameters
None

### Example(s)
*Obtain the name and description for all the different waste types*<br/>
https://opendata.concordia.ca/API/v1/facilities/waste/waste_type

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Waste_Type</td>
        <td>string</td>
        <td>Short name for the type of waste.  (Dry waste, Organics, etc)</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>string</td>
        <td>Detailed description for the type of waste.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "Waste_Type":"",
        "Description":""
    },
    {
        "Waste_Type":"",
        "Description":""
    },
...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/waste_type.csv
