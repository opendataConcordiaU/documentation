### [Home](../../README.md) > Courses > Sessions

# Course Sessions


## Description
Session details for the courses.

**Data Steward:** Enrolment Services

**Update Frequency:** Daily

## Call
GET course/session/filter/{career}/{termcode}/{sessioncode}

### Parameters
All parameters can by substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
    <tr>
        <td>career</td>
        <td>Level of study. Undergraduate (UGRD)/ Graduate (GRAD)/ Continuing Education (CCCE) / Professional Development (PDEV).</td>
    </tr>
    <tr>
        <td>termcode</td>
        <td>4 Digit term code.  This is comprised of the 1st, 3rd and 4th digit of the academic year and ends with one of the following :<br><br>
1 – Summer <br>
2 – Fall<br>
3 – Fall/Winter<br>
4 – Winter <br>
5 – Spring (for CCCE career only)<br>
6 – Summer (for CCCE career only)<br><br>
For example, the code for Fall 2018 = 2182
And the code for Winter 2019 = 2184 (this is because Winter 2019 comes under the 2018 academic year).</td>
    </tr>
    <tr>
        <td>sessioncode</td>
        <td>A term can be broken down into separate sessions. For example, a summer term will commonly have a 1st session (6H1), a second session (6H2) and a full summer session (13W).</td>
    </tr>
</table>

### Example(s)
*Obtain session details for session code 13W*

https://opendata.concordia.ca/API/v1/course/session/filter/*/*/13W

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>career</td>
        <td>string</td>
        <td>Undergraduate (UGRD), Graduate (GRAD) or Continuing Education (CCCE) or Professional Development (PDEV).</td>
    </tr>
        <tr>
        <td>termCode</td>
        <td></td>
        <td>4 Digit term code.  This is comprised of the 1st, 3rd and 4th digit of the academic year and ends with one of the following :<br><br>
1 – Summer <br>
2 – Fall<br>
3 – Fall/Winter<br>
4 – Winter <br>
5 – Spring (for CCCE career only)<br>
6 – Summer (for CCCE career only)<br><br>
For example, the code for Fall 2018 = 2182
And the code for Winter 2019 = 2184 (this is because Winter 2019 comes under the 2018 academic year).</td>
    </tr>
        <tr>
        <td>termDescription</td>
        <td>string</td>
        <td>Description of the Term Code (for e.g. Fall 2018).</td>
    </tr>
        <tr>
        <td>sessionCode</td>
        <td>string</td>
        <td>A term can be broken down into separate sessions.  For example, a summer term will commonly have a 1st session (6H1), a second session (6H2) and a full summer session (13W).</td>
    </tr>
        <tr>
        <td>sessionDescription</td>
        <td>string</td>
        <td>Description of the Session Code (for e.g 13 week).</td>
    </tr>
        <tr>
        <td>sessionBeginDate</td>
        <td>date</td>
        <td>Date session begins.</td>
    </tr>
        <tr>
        <td>sessionEndDate</td>
        <td>date</td>
        <td>Date session ends.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "career": "GRAD",
        "termCode": "2141",
        "termDescription": "Summer 2014",
        "sessionCode": "13W",
        "sessionDescription": "13 week",
        "sessionBeginDate": "07/05/2014",
        "sessionEndDate": "19/08/2014"
    },
    {
        "career": "GRAD",
        "termCode": "2142",
        "termDescription": "Fall 2014",
        "sessionCode": "13W",
        "sessionDescription": "13 week",
        "sessionBeginDate": "02/09/2014",
        "sessionEndDate": "01/12/2014"
    },
    ...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/CU_SR_OPEN_DATA_TERM_SESS.csv