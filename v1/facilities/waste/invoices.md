### [Home](../../../README.md) > Facilities > Waste > Invoices

# Invoices


## Description
Returns a list with the details of all the invoices or credit notices from the [Zero Waste Concordia Program](https://www.concordia.ca/about/sustainability/sustainability-initiatives/zero-waste/zero-waste-program.html). Can be used with other endpoint methods, such as the [building list](../buildinglist.md) methods to obtain extended information about the building and its location.

**Data Steward:** Facilities Management, Property Management

**Update Frequency:** Monthly (manual)

## Call
GET facilities/waste/invoices/filter/{building}/{startdate}/{enddate}

### Parameters
All parameters can by substituted by a wildcard *.

<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>building</td>
        <td>Two letter code for the building. See Building List method.</td>
    </tr>
    </tr>
        <tr>
        <td>startdate</td>
        <td>Specifies the start date range for the invoices. (YYYY-MM-DD)</td>
    </tr>
    </tr>
        <tr>
        <td>enddate</td>
        <td>Specifies the end date range for the invoices. (YYYY-MM-DD) </td>
    </tr>
</table>

### Example(s)
*Obtain invoices from the EV building from February 1st until May 1st*<br/>
https://opendata.concordia.ca/API/v1/facilities/waste/invoices/filter/EV/2019-02-01/2019-05-01

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>Source_Type</td>
        <td>string</td>
        <td>Type of invoice. (Invoice, Credit Notice)</td>
    </tr>
    <tr>
        <td>Building</td>
        <td>string</td>
        <td>Two letter code for the building. (EV, GM, SP)</td>
    </tr>
    <tr>
        <td>Bin_Type</td>
        <td>string</td>
        <td>The type of bin used for the collection. See Bin Types method</td>
    </tr>
    <tr>
        <td>Waste_Type</td>
        <td>string</td>
        <td>The type of waste being disposed of. See Waste Types method</td>
    </tr>
    <tr>
        <td>Qty</td>
        <td>integer</td>
        <td>Number of bins used for the pickup.</td>
    </tr>
    <tr>
        <td>Mass</td>
        <td>decimal</td>
        <td>Weight of the pickup in metric tons.</td>
    </tr>
    <tr>
        <td>Total_Cost</td>
        <td>decimal</td>
        <td>Cost or credit associated with the invoice or credit notice. Credit notices are negative.</td>
    </tr> 
    <tr>
        <td>Date</td>
        <td>date</td>
        <td>Date indicated on the invoice or credit notice (format: yyyy-MM-dd HH:mm:ss.SSS).</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "Source_Type": "Invoice",
        "Building": "EV",
        "Bin_Type": "42YD Recycling Compactor",
        "Waste_Type": "Mixed_recycling",
        "Qty": "1",
        "Mass": "",
        "Total_Cost": "$143.72",
        "Date": "2019-02-16 00:00:00.000"
    },
    {
        "Source_Type": "Invoice",
        "Building": "EV",
        "Bin_Type": "42YD Recycling Compactor",
        "Waste_Type": "Mixed_recycling",
        "Qty": "1",
        "Mass": "",
        "Total_Cost": "$143.72",
        "Date": "2019-04-13 00:00:00.000"
    },
...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/Facilities/Waste/Invoices.csv
