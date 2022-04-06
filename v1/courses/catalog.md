### [Home](../../README.md) > Courses > Catalog

# Course Catalog


## Description
Provides detailed catalog information for every course offered at Concordia.

**Data Steward:** Enrolment Services

**Update Frequency:** Daily

## Call
GET course/catalog/filter/{subject}/{catalog}/{carreer}

### Parameters
All parameters can by substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>subject</td>
        <td>Four letter code for the subject classification for a course.</td>
    </tr>
    </tr>
        <tr>
        <td>catalog</td>
        <td>Three or four alphanumeric code for the course.</td>
    </tr>
    </tr>
        <tr>
        <td>career</td>
        <td>Four letter code indicating if the course is at the graduate or undergraduate level. (GRAD, UGRD)</td>
    </tr>
</table>

### Example(s)
*Obtain the catalog information for all BIOL courses.*

<https://opendata.concordia.ca/API/v1/course/catalog/filter/BIOL/*/*>

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>ID</td>
        <td>integer</td>
        <td>6 digit Course Identification Number</td>
    </tr>
    <tr>
        <td>title</td>
        <td>string</td>
        <td>Title of the course </td>
    </tr>
    <tr>
        <td>subject</td>
        <td>string</td>
        <td>4 character subject code (e.g. ENGL, HIST, COMM) </td>
    </tr>
    <tr>
        <td>catalog</td>
        <td>string</td>
        <td>3 or 4 digit number of Catalog</td>
    </tr>
    <tr>
        <td>career</td>
        <td>string</td>
        <td>Undergraduate (UGRD), Graduate (GRAD) or Continuing Education (CCCE) or Professional Development (PDEV) </td>
    </tr>
    <tr>
        <td>classUnit</td>
        <td>real</td>
        <td>Number of units the course is worth</td>
    </tr>
    <tr>
        <td>prerequisites</td>
        <td>string</td>
        <td>Description of any requisites for the course</td>
    </tr>
    <tr>
        <td>crosslisted</td>
        <td>string</td>
        <td>Any courses that are classed as equivalent to the selected course</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "ID":"002624",
        "title":"Fundamentals of Human Biology",
        "subject":"BIOL",
        "catalog":"200",
        "career":"UGRD",
        "classUnit":"3.00",
        "prerequisites":"",
        "crosslisted":null
    },
    {
        "ID":"002625",
        "title":"Introductory Biology",
        "subject":"BIOL",
        "catalog":"201",
        "career":"UGRD",
        "classUnit":"3.00",
        "prerequisites":"Students must not have taken any the following courses: BIOL225, BIOL226, BIOL261.",
        "crosslisted":null
    },
    {
        "ID":"002625",
        "title":"Introductory Biology",
        "subject":"BIOL",
        "catalog":"201",
        "career":"UGRD",
        "classUnit":"3.00",
        "prerequisites":"Students must not have taken any the following courses: BIOL225, BIOL226, BIOL261.",
        "crosslisted":null
    },
...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/CU_SR_OPEN_DATA_CATALOG.csv