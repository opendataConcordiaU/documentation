### [Home](../../README.md) > Courses > Course Description

# Course Description


## Description
Detailed english description of a course.  Information for a specific course can be retrieved using the ID from the [course catalogue method](./catalog.md). 

**Data Steward:** Enrolment Services

**Update Frequency:** Daily

## Call
GET course/description/filter/{courseID}

### Parameters
All parameters can by substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>courseID</td>
        <td>Unique identifier for the course. IDs can be retrieved using the course catalogue method.</td>
    </tr>
</table>

### Example(s)
*Obtain the description for the course with an ID of 000106*
https://opendata.concordia.ca/API/v1/course/description/filter/000106

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
        <td>Uniquie identifier for the course.</td>
    </tr>
    <tr>
        <td>description</td>
        <td>string</td>
        <td>Long text description of the course.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "ID": "000106",
        "description": "This course examines the principles of and methodology used in fraud detection and deterrence. Topics covered may include skimming, cash larceny, cheque tampering, billing, payroll and expense reimbursement schemes, non-cash misappropriations, corruption, fraudulent financial statements, conducting investigations and interviewing witnesses. This course may also examine auditors legal responsibilities towards fraud, the evaluation of internal controls and important pieces of legislation such as the Sarbanes-Oxley Act and the Criminal Code. Finally, the ethical aspects associated with fraud are discussed. Class sessions consist of lectures, real-life fraud case discussions and the presentation of DVDs from the Association of Certified Fraud Examiners.\nPrerequisite: COMM 217, 315.\nNOTE: Students who have received credit for this topic under an ACCO 470 number may not take this course for credit.\n\n\n\n"
    }
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/CU_SR_OPEN_DATA_CATALOG_DESC.csv