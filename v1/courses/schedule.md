### [Home](../../README.md) > Courses > Schedule

# Course Schedule


## Description
Schedule details for the courses

**Data Steward:** Enrolment Services

**Update Frequency:** Daily

## Call
GET course/schedule/filter/{courseId}/{subject}/{catalog}

### Parameters
All parameters can by substituted by a wildcard *.
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
    <tr>
        <td>CourseId</td>
        <td>6 digit Course Identification Number.</td>
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
*Obtain schedule for all BIOL 201 courses*
https://opendata.concordia.ca/API/v1/course/schedule/filter/*/BIOL/201

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description.</b></td>
    </tr>
    <tr>
        <td>courseID</td>
        <td>integer</td>
        <td>6 digit Course Identification Number.</td>
    </tr>
    <tr>
        <td>termCode</td>
        <td>integer</td>
        <td>4 Digit term code.  This is comprised of the 1st, 3rd and 4th digit of the academic year and ends with one of the following : <br><br>
         1 – Summer <br>
         2 – Fall <br>
         3 – Fall/Winter <br>
         4 – Winter  <br>
         5 – Spring (for CCCE career only) <br>
         6 – Summer (for CCCE career only) <br><br>
         For example, the code for Fall 2018 = 2182 And the code for Winter 2019 = 2184 (this is because Winter 2019 comes under the 2018 academic year). </td>
    </tr>
    <tr>
        <td>session</td>
        <td>string</td>
        <td>A term can be broken down into separate sessions.  For example, a summer term will commonly have a 1st session (6H1), a second session (6H2) and a full summer session (13W). <br>
        Possible values (those with * are most common) : <br>
        10W (10 week) <br>
        12W (12 week) <br>
        13W (13 week)* <br>
        26W (26 week)* <br>
        2W (2 week) <br>
        3W1 (3 week first) <br>
        3W2 ( 3 week second) <br>
        6H1 (6 and half week first)* <br>
        6H2 (6 and half week second)* <br>
        6W (6 week) <br>
        IDY (Intensive Day CCCE)* <br>
        NSS (Non-Standard Session)* </td>
    </tr>
    <tr>
        <td>subject</td>
        <td>string</td>
        <td>4 character subject code (e.g. ENGL, HIST, COMM). </td>
    </tr>
    <tr>
        <td>catalog</td>
        <td>string</td>
        <td>3 or 4 digit catalog number.</td>
    </tr>
    <tr>
        <td>section</td>
        <td>integer</td>
        <td>The specific section letter or number of the scheduled class.</td>
    </tr>
    <tr>
        <td>componentCode</td>
        <td>string</td>
        <td>3 character code related to the component type (e.g. LEC, TUT, LAB). </td>
    </tr>
    <tr>
        <td>componentDescription</td>
        <td>string</td>
        <td>Description of component code (e.g. Lecture, Tutorial, Laboratory).</td>
    </tr>
    <tr>
        <td>classNumber</td>
        <td>integer</td>
        <td>A 4 or 5 digit number that is unique to each scheduled section within a term. </td>
    </tr>
    <tr>
        <td>classAssociation</td>
        <td>integer</td>
        <td>The class association number links class sections together that are scheduled for the same course within a unique term. <br> <br>For example, if MATH201 has a LEC (Lecture) Section A and a TUT (Tutorial) Section AB and both have class association number 1, that means they are linked together and a student should take TUT Section AB with LEC Section A. <br><br>A class association of ‘9999’ assigned to a class component means it is linked to any of the other classes offered for that course in the term. </td>
    </tr>
    <tr>
        <td>courseTitle</td>
        <td>string</td>
        <td>Title of the course </td>
    </tr>
    <tr>
        <td>topicID</td>
        <td>integer</td>
        <td>If a course is a topic course (meaning it is the same course ID/subject code and catalog # but can have topics that differ for each offering) it will have a topic ID which is a 1 or 2 digit number. <br><br>Value can be null.</td>
    </tr>
    <tr>
        <td>topicDescription</td>
        <td>string</td>
        <td>This is the description of the topic that relates to the above topic ID for the course. </td>
    </tr>
    <tr>
        <td>classStatus</td>
        <td>string</td>
        <td>Currently we only show ‘Active’ classes (those available for enrollment). </td>
    </tr>
    <tr>
        <td>locationCode</td>
        <td>string</td>
        <td>The CAMPUS at which the class is offered. <br><br>SGW (Sir George Williams – downtown) <br> LOY (Loyola) <br> ONL (Online)<br> PI (Power Institute) </td>
    </tr>
    <tr>
        <td>instructionModeCode</td>
        <td>string</td>
        <td>The method of instruction for the class. <br>B (Blended Learning) <br>OL (On-Line) <br>P (In Person)</td>
    </tr>
    <tr>
        <td>instructionModeDescription</td>
        <td>string</td>
        <td>The description of the instruction mode code above. </td>
    </tr>
    <tr>
        <td>meetingPatternNumber</td>
        <td>integer</td>
        <td>A class can have more than one meeting pattern, if for example, the times or days the class if offered change over the term. </td>
    </tr>
    <tr>
        <td>roomCode</td>
        <td>string</td>
        <td>This is the overall code for the room that the class is assigned to.  It comprises the building code and room number. </td>
    </tr>
    <tr>
        <td>buildingCode</td>
        <td>string</td>
        <td>The building code the class is assigned to. </td>
    </tr>
    <tr>
        <td>room</td>
        <td>string</td>
        <td>The room number that the class is assigned to. </td>
    </tr>
    <tr>
        <td>classStartTime</td>
        <td>time</td>
        <td>Class start time.</td>
    </tr>
    <tr>
        <td>classEndTime</td>
        <td>time</td>
        <td>Class end time.</td>
    </tr>
    <tr>
        <td>mondays</td>
        <td>boolean</td>
        <td>Mondays.</td>
    </tr>
    <tr>
        <td>tuesdays</td>
        <td>boolean</td>
        <td>Tuesdays.</td>
    </tr>
    <tr>
        <td>wednesdays</td>
        <td>boolean</td>
        <td>Wednesdays.</td>
    </tr>
    <tr>
        <td>thursdays</td>
        <td>boolean</td>
        <td>Thursdays.</td>
    </tr>
    <tr>
        <td>fridays</td>
        <td>boolean</td>
        <td>Fridays.</td>
    </tr>
    <tr>
        <td>saturdays</td>
        <td>boolean</td>
        <td>Saturdays.</td>
    </tr>
    <tr>
        <td>sundays</td>
        <td>boolean</td>
        <td>Sundays.</td>
    </tr>
    <tr>
        <td>classStartDate</td>
        <td>date</td>
        <td>Date when class starts.</td>
    </tr>
    <tr>
        <td>classEndDate</td>
        <td>date</td>
        <td>Date when class ends.</td>
    </tr>
    <tr>
        <td>career</td>
        <td>string</td>
        <td>Level of study. Undergraduate (UGRD), Graduate (GRAD)or Continuing Education (CCCE) or Professional Development (PDEV)</td>
    </tr>
    <tr>
        <td>departmentCode</td>
        <td>string</td>
        <td>3 to 10 character code for the Department. </td>
    </tr>
    <tr>
        <td>departmentDescription</td>
        <td>string</td>
        <td>Description of the above Department Code. </td>
    </tr>
    <tr>
        <td>facultyCode</td>
        <td>string</td>
        <td>2 to 4 character code for the Faculty. </td>
    </tr>
    <tr>
        <td>facultyDescription</td>
        <td>string</td>
        <td>Description of the above Faculty Code. </td>
    </tr>
    <tr>
        <td>enrollmentCapacity</td>
        <td>integer</td>
        <td>The set capacity of the class – how many students can enroll. </td>
    </tr>
    <tr>
        <td>currentEnrollment</td>
        <td>integer</td>
        <td>Currently how many students are enrolled.</td>
    </tr>
    <tr>
        <td>waitlistCapacity</td>
        <td>integer</td>
        <td>How many students can be on the waitlist.</td>
    </tr>
    <tr>
        <td>currentWaitlistTotal</td>
        <td>integer</td>
        <td>Currently how many students are on the waitlist.</td>
    </tr>
    <tr>
        <td>hasSeatReserved</td>
        <td>boolean</td>
        <td>Does this class have seats reserved for students with a certain criteria.</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "courseID":"002625",
        "termCode":"2141",
        "session":"13W",
        "subject":"BIOL",
        "catalog":"201",
        "section":"50",
        "componentCode":"LEC",
        "componentDescription":"Lecture",
        "classNumber":"1161",
        "classAssociation":"1",
        "courseTitle":"INTRODUCTORY BIOLOGY",
        "topicID":"",
        "topicDescription":"",
        "classStatus":"Active",
        "locationCode":"LOY",
        "instructionModeCode":"P",
        "instructionModeDescription":"In Person",
        "meetingPatternNumber":"1",
        "roomCode":"CC320",
        "buildingCode":"CC",
        "room":"320",
        "classStartTime":"18.30.00",
        "classEndTime":"21.00.00",
        "modays":"N",
        "tuesdays":"Y",
        "wednesdays":"N",
        "thursdays":"N",
        "fridays":"N",
        "saturdays":"N",
        "sundays":"N",
        "classStartDate":"07\/05\/2014",
        "classEndDate":"19\/08\/2014",
        "career":"Undergraduate",
        "departmentCode":"BIOLOGY",
        "departmentDescription":"Biology",
        "facultyCode":"AS",
        "facultyDescription":"Faculty of Arts & Science",
        "enrollmentCapacity":"72",
        "currentEnrollment":"66",
        "waitlistCapacity":"0",
        "currentWaitlistTotal":"0",
        "hasSeatReserved":""
    },
    ...
]
```

## Raw Data
https://opendata.concordia.ca/datasets/sis/CU_SR_OPEN_DATA_SCHED.csv
