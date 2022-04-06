### [Home](../../README.md) > Courses > Faculty

# Course Faculty


## Description
Faculty and department information

**Data Steward:** Enrolment Services

**Update Frequency:** Daily

## Call
GET course/faculty/filter/{facultyCode}/{departmentCode}

### Parameters
All parameters can by substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
    <tr>
        <td>facultyCode</td>
        <td>2 to 4 character code for the Faculty. Defines the faculty the item belongs to. It is possible for items to belong to “Any” faculty.<br><br>JMSB (John Molson School of Business)<br>GCS (Gina Cody School of Engineering and Computer Science) <br> FAS (Faculty of Arts and Science)<br> FFA (Faculty of Fine Arts).</td>
    </tr>
    <tr>
        <td>departmentcCode</td>
        <td>3 to 10 character code for the Department. </td>
    </tr>
</table>

### Example(s)
*Obtain details on all faculties and departments*

<https://opendata.concordia.ca/API/v1/course/faculty/filter/*/*>

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>facultyCode</td>
        <td>string</td>
        <td>2 to 4 character code for the Faculty. Defines the faculty the item belongs to. It is possible for items to belong to “Any” faculty.<br><br>JMSB (John Molson School of Business)<br>GCS (Gina Cody School of Engineering and Computer Science) <br> FAS (Faculty of Arts and Science)<br> FFA (Faculty of Fine Arts).</td>
    </tr>
    <tr>
        <td>facultyDescription</td>
        <td>string</td>
        <td>Description of the above Faculty Code. </td>
    </tr>
    <tr>
        <td>deparmentCode</td>
        <td>string</td>
        <td>3 to 10 character code for the Department. </td>
    </tr>
    <tr>
        <td>deparmentDescription</td>
        <td>string</td>
        <td>Description of the above Department Code. </td>
    </tr>
</table>

## Output
```JSON
[
    {
        "facultyCode": "AS",
        "facultyDescription": "Faculty of Arts & Science",
        "deparmentCode": "ANDRAGOGY",
        "deparmentDescription": "Andragogy"
    },
    ...
    {
        "facultyCode": "CCE",
        "facultyDescription": "The Centre for Continuing Education",
        "deparmentCode": "CEBA",
        "deparmentDescription": "Business Administration"
    },
    ...
    {
        "facultyCode":"ENCS",
        "facultyDescription":"Gina Cody School of Engineering & Computer Science",
        "deparmentCode":"BCEE",
        "deparmentDescription":"Building Civil & Environ Engineering"
    },
    ...
    {
        "facultyCode": "FA",
        "facultyDescription": "Faculty of Fine Arts",
        "deparmentCode": "ARTEDUCAT",
        "deparmentDescription": "Art Education"
    },
    ...
    {
        "facultyCode": "JMSB",
        "facultyDescription": "John Molson School of Business",
        "deparmentCode": "ACCOUNTNCY",
        "deparmentDescription": "Accountancy"
    },
    ...
    {
        "facultyCode": "SGS",
        "facultyDescription": "School of Graduate Studies",
        "deparmentCode": "GPS",
        "deparmentDescription": "Graduate and Professional Skills"
    },
    ...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/CU_SR_OPEN_DATA_DEPT_FAC_STRUC.csv