### [Home](../../README.md) > Library > Computers

# Computers


## Description
Real time availability of desktop computers, laptops and tablet in Webster and Vanier libraries.

**Data Steward:** Concordia University Library

**Update Frequency:** Live

## Call
GET library/computers/

### Parameters
None

### Example(s)
*Obtain all desktop, laptop, and tablet avaiability for both libraries*

https://opendata.concordia.ca/API/v1/library/computers/

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
        Computer availability for Webster library
            <table>
                <tr>
                    <td>Desktops</td>
                    <td>array</td>
                    <td>
                    Desktop avaiability per room
                        <table>
                            <tr>
                                <td>LB-245</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-245</td>
                            </tr>
                            <tr>
                                <td>LB-285</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-285</td>
                            </tr>
                            <tr>
                                <td>LB-345</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-345</td>
                            </tr>
                            <tr>
                                <td>LB-385</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-385</td>
                            </tr>
                            <tr>
                                <td>LB-445</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-445</td>
                            </tr>
                            <tr>
                                <td>LB-485</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-485</td>
                            </tr>
                            <tr>
                                <td>LB-545</td>
                                <td>integer</td>
                                <td>Count of available desktops in LB-545</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Laptops</td>
                    <td>integer</td>
                    <td>Count of available laptops at Webster library</td>
                </tr>
                <tr>
                    <td>Tablets</td>
                    <td>integer</td>
                    <td>Count of available tablets at Webster library</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>Vanier</td>
        <td>array</td>
        <td>
        Computer availability for vanier library
            <table>
                <tr>
                    <td>Desktops</td>
                    <td>array</td>
                    <td>
                    Desktop avaiability per room
                        <table>
                            <tr>
                                <td>VL-122</td>
                                <td>integer</td>
                                <td>Count of available desktops in VL-122</td>
                            </tr>
                            <tr>
                                <td>VL-201</td>
                                <td>integer</td>
                                <td>Count of available desktops in VL-201</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Laptops</td>
                    <td>integer</td>
                    <td>Count of available laptops at Vanier library</td>
                </tr>
                <tr>
                    <td>Tablets</td>
                    <td>integer</td>
                    <td>Count of available tablets at Vanier library</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

## Output
```JSON
{
    "Webster": {
        "Desktops": {
            "LB-245": "23",
            "LB-285": "11",
            "LB-345": "35",
            "LB-385": "37",
            "LB-445": "33",
            "LB-485": "29",
            "LB-545": "14"
        },
        "Laptops": "151",
        "Tablets": "41"
    },
    "Vanier": {
        "Desktops": {
            "VL-122": "17",
            "VL-201": "16",
            "VL-Entrance": "0"
        },
        "Laptops": "74",
        "Tablets": "23"
    }
}
```

## Raw Data
Only available via the API