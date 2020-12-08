### [Home](../../../README.md) > Facilities > waste > Bin Types

# Bin Types


## Description
Returns a list of the different types of bins being used as part of the [Zero Waste Concordia Program](https://www.concordia.ca/about/sustainability/sustainability-initiatives/zero-waste/zero-waste-program.html).  This method provides additional information from what is available via the [invoices](./invoices.md) method.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Monthly (manual)

## Call
GET facilities/waste/bin_types

### Parameters
None

### Example(s)
*Obtain the name and description for all the different bin types*<br/>
https://opendata.concordia.ca/API/v1/facilities/waste/bin_types

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Bin_Type</td>
        <td>string</td>
        <td>Short name for the type of bin. (240L Compost, 30YD Cardboard Compactor, etc)</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>string</td>
        <td>Detailed description of the type of bin.</td>
    </tr>
</table>

## Output
```JSON
    {
        "Bin_Type": "20YD Roll off dry waste",
        "Description": "Open container for disposal of large, dry materials. Typically includes furniture, construction and renovation waste, and other materials not consumed on an ongoing basis. 20 cubic yard volume approximately."
    },
    {
        "Bin_Type": "20YD Roll off Concrete",
        "Description": "Open container for disposal of large, dry materials. Typically from laboratories. 20 cubic yard volume."
    },
...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/bin_types.csv
