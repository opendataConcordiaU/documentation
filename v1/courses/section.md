### [Home](../../README.md) > Courses > Section

# Course Section


## Description
Provides section details for courses offered at Concordia.  Parameters can be obtained by using the [course catalogue method](./catalog.md).

**Data Steward:** Enrolment Services

**Update Frequency:** Daily

## Call
GET course/section/filter/{subject}/{catalog}

### Parameters
All parameters can by substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
    <tr>
        <td>subject</td>
        <td>4 character subject code (e.g. ENGL, HIST, COMM).</td>
    </tr>
    <tr>
        <td>catalog</td>
        <td>3 or 4 digit catalog number.</td>
    </tr>
</table>

### Example(s)
*Obtain section details for all PHYS 226 Courses.*

https://opendata.concordia.ca/API/v1/course/section/filter/PHYS/226

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>term</td>
        <td></td>
        <td>4 Digit term code.  This is comprised of the 1st, 3rd and 4th digit of the academic year and ends with one of the following : 1 – Summer 2 – Fall 3 – Fall/Winter 4 – Winter  5 – Spring (for CCCE career only) 6 – Summer (for CCCE career only) For example, the code for Fall 2018 = 2182 And the code for Winter 2019 = 2184 (this is because Winter 2019 comes under the 2018 academic year) </td>
    </tr>
    <tr>
        <td>session</td>
        <td></td>
        <td>A term can be broken down into separate sessions.  For example, a summer term will commonly have a 1st session (6H1), a second session (6H2) and a full summer session (13W). </td>
    </tr>
    <tr>
        <td>overallEnrollCapacity</td>
        <td></td>
        <td>This is the overall control for all of the classes in the combined section. This number may equal the sum of the individual class section capacities that comprise the combined section, or it may be lower. </td>
    </tr>
    <tr>
        <td>overallEnrollments</td>
        <td></td>
        <td>The current number of enrolled students. </td>
    </tr>
    <tr>
        <td>overallWaitlistCapacity</td>
        <td></td>
        <td>This is the overall control for all of the classes in the combined section. This number may equal the sum of the individual class section waitlist capacities that comprise the combined section, or it may be lower. </td>
    </tr>
    <tr>
        <td>overallWaitlistTotal</td>
        <td></td>
        <td>The current number of waitlisted students. </td>
    </tr>
    <tr>
        <td>subject</td>
        <td></td>
        <td>4 character subject code (e.g. ENGL, HIST, COMM). </td>
    </tr>
    <tr>
        <td>catalog</td>
        <td></td>
        <td>3 or 4 digit catalog number. </td>
    </tr>
    <tr>
        <td>section</td>
        <td></td>
        <td>The specific section letter or number of the scheduled class. </td>
    </tr>
    <tr>
        <td>components</td>
        <td></td>
        <td>3 character code related to the component type (e.g. LEC, TUT, LAB).   </td>
    </tr>
    <tr>
        <td>classNumber</td>
        <td></td>
        <td>A 4 or 5 digit number that is unique to each scheduled section within a term. </td>
    </tr>
    <tr>
        <td>classEnrollCapacity</td>
        <td></td>
        <td>The individual set capacity of the class within the combined section. </td>
    </tr>
    <tr>
        <td>classEnrollments</td>
        <td></td>
        <td>The current number of enrolled students. </td>
    </tr>
    <tr>
        <td>classWaitlistCapacity</td>
        <td></td>
        <td>The individual set waitlist capacity of the class within the combined section.  If “0” then there is no waitlist set up for the class. </td>
    </tr>
    <tr>
        <td>classWaitlistTotal</td>
        <td></td>
        <td>The current number of waitlisted students. </td>
    </tr>
</table>

## Output
```JSON
[
    {
        "term": "2141",
        "session": "6H1",
        "overallEnrollCapacity": "15",
        "overallEnrollments": "21",
        "overallWaitlistCapacity": "0",
        "overallWaitlisTotal": "0",
        "subject": "PHYS",
        "catalog": "226",
        "section": "40",
        "components": "LAB",
        "classNumber": "3686",
        "classEnrollCapacity": "12",
        "classEnrollments": "8",
        "classWaitlistCapacity": "0",
        "classWaitlistTotal": "0"
    },
    {
        "term": "2141",
        "session": "6H1",
        "overallEnrollCapacity": "15",
        "overallEnrollments": "12",
        "overallWaitlistCapacity": "0",
        "overallWaitlisTotal": "0",
        "subject": "PHYS",
        "catalog": "226",
        "section": "41",
        "components": "LAB",
        "classNumber": "3685",
        "classEnrollCapacity": "12",
        "classEnrollments": "1",
        "classWaitlistCapacity": "0",
        "classWaitlistTotal": "0"
    },
    ...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/CU_SR_OPEN_DATA_COMB_SECTIONS.csv