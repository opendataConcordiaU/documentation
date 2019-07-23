### [Home](../../README.md) > Courses > Experiential Learning

# Experiential Learning


## Description
List of experiential learning activities currently offered at Concordia. Can be filtered by: Faculty, Department, Program, Degree. An ordering field can be specified as well as an offset and a result limiter

**Data Steward:** Experiential Learning Office

**Update Frequency:** Annually (manual)

## Call
GET course/exle/filter/{ids|}/{faculty}/{department}/{program}/{degree}/{type}/{orderby}/{offset}/{count}

### Parameters
All parameters can be substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>id(s)</td>
        <td>Unique id(s) for the course (separated by | ).</td>
    </tr>
    <tr>
        <td>faculty</td>
        <td>Official code for the faculty responsible for the experiential learning opportunity. (Any, JMSB, GCS, FAS, FFA)</td>
    </tr>
    <tr>
        <td>department</td>
        <td>Name of the department offering the experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>program</td>
        <td>Name of the program offering the experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>degree</td>
        <td>Degree which the experiential learning opportunity is associated with. (Bachelor, Certificate, Master, PhD, Any degree)</td>
    </tr>
    <tr>
        <td>type</td>
        <td>Describes the type of experiential learning opportunity. (Work-integrated, Course-integrated, research-integrated)</td>
    </tr>
    <tr>
        <td>order by</td>
        <td>Name of the field by which to order the results.</td>
    </tr>
    <tr>
        <td>offset</td>
        <td>Offset count from which to extract a response. Used when navigating a subset of results</td>
    </tr>
    <tr>
        <td>count</td>
        <td>Number of results to return.</td>
    </tr>
</table>

### Example(s)
*Courses from the Building Engineering program order by title*
https://opendata.concordia.ca/API/v1/course/exle/filter/*/*/*/Building%20Engineering/*/*/*/Title/0/100

*Courses with ID GCS_12 or GCS_522*
https://opendata.concordia.ca/API/v1/course/exle/filter/GCS_12|GCS_522/*/*/*/*/*/*/Title/0/100

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>KeyID</td>
        <td>string</td>
        <td>Unique identifier for each experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>Faculty</td>
        <td>string</td>
        <td>Official code for the faculty responsible for the experiential learning opportunity. (Any, JMSB, GCS, FAS, FFA)</td>
    </tr>
    <tr>
        <td>Department</td>
        <td>string</td>
        <td>Name of the department offering the experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>Program</td>
        <td>string</td>
        <td>Name of the program offering the experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>Level</td>
        <td>string</td>
        <td>Level for which the experiential learning opportunity is associated with. (Undergraduate, Graduate, Any level)</td>
    </tr>
    <tr>
        <td>Degree</td>
        <td>string</td>
        <td>Degree to which the experiential learning opportunity is associated with. (Bachelor, Certificate, Master, PhD, Any degree)</td>
    </tr>
    <tr>
        <td>Course_code</td>
        <td>string</td>
        <td>Official 4 letter course code for the experiential learning opportunity. Can be NULL</td>
    </tr>
    <tr>
        <td>Course_number</td>
        <td>integer</td>
        <td>Official course code number for the experiential learning opportunity. Can be NULL</td>
    </tr>
    <tr>
        <td>Title</td>
        <td>string</td>
        <td>Name of the experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>string</td>
        <td>More detailed description of the experiential learning opportunity.</td>
    </tr>
    <tr>
        <td>Metadata</td>
        <td>string</td>
        <td>Additional keywords for searching.</td>
    </tr>
    <tr>
        <td>Type</td>
        <td>string</td>
        <td>Describes the type of experiential learning opportunity. (Work-integrated, Course-integrated, research-integrated)</td>
    </tr>
    <tr>
        <td>Website</td>
        <td>string (URL)</td>
        <td>A link containing more information on the experiential learning opportunity. Can be NULL</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "KeyID": "GCS_12",
        "Faculty": "GCS",
        "Department": "Building, Civil and Environmental Engineering (BCEE)",
        "Program": "Building Engineering",
        "Level": "Undergraduate",
        "Degree": "Bachelor",
        "Course_code": "BLDG",
        "Course_number": "366",
        "Title": "Acoustics and Lighting",
        "Description": "Laboratory: 2 hours per week, alternate weeks",
        "Metadata": "Courses",
        "Type": "Course-integrated",
        "Website": "http://www.concordia.ca/ginacody/computer-science-software-eng/research/groups.html"
    },
    {
        "KeyID": "GCS_522",
        "Faculty": "GCS",
        "Department": "Building, Civil and Environmental Engineering (BCEE)",
        "Program": "Building Engineering",
        "Level": "Any level",
        "Degree": "Any degree",
        "Course_code": "",
        "Course_number": "",
        "Title": "Thermal Environment & Controls Lab",
        "Description": "Monitoring, control, and diagnostics of HVAC systems",
        "Metadata": "Research labs & facilities",
        "Type": "Research-based",
        "Website": ""
    }
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/Experiential%20Learning.csv
