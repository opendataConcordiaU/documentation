### [Home](../../README.md) > Library > Reservations

# Reservations


## Description
A real-time list of reservations made for "bookable" resource in the library.  Uses resource and schedule identifiers obtained from the [room list method](./room_list.md).

**Data Steward:** Concordia University Library

**Update Frequency:** Live

## Call
GET library/rooms/getRoomReservations/{resourceID}/{scheduleID}

### Parameters
<table>
    <tr>
        <td><b>Parameter</b></td>
        <td><b>Description</b></td>
    </tr>
        <tr>
        <td>resourceID</td>
        <td>Unique identifier for the resource. (Required)</td>
    </tr>
    </tr>
        <tr>
        <td>scheduleID</td>
        <td>A date string using the format YYYY-MM-DD. (Required)</td>
    </tr>
</table>

### Example(s)
*Returns the reservations for the Webster Library LB-351 (Netherlands) group study room.*<br>
https://opendata.concordia.ca/API/v1/library/rooms/getRoomReservations/53/1

## Response
<table>
    <tr>
        <td><b>Field Name</b></td>
        <td><b>Type</b></td>
        <td><b>Value Description</b></td>
    </tr>
    <tr>
        <td>referenceNumber</td>
        <td>string</td>
        <td>Unique identifier for the reservation. A value of 0 indicates an administrative block.</td>
    </tr>
    <tr>
        <td>startDate</td>
        <td>datetime</td>
        <td>Start date and time of the reservation. (YYYY-MM-DD HH:MM:SS)</td>
    </tr>
    <tr>
        <td>endDate</td>
        <td>datetime</td>
        <td>End date and time of the reservation. (YYYY-MM-DD HH:MM:SS)</td>
    </tr>
</table>

## Output
```JSON
[
    {
        "referenceNumber":0,
        "startDate":"2019-06-28 00:00:00",
        "endDate":"2019-06-28 08:00:00"
    },
    {
        "referenceNumber":0,
        "startDate":"2019-06-28 08:00:00",
        "endDate":"2019-06-28 09:00:00"
    },
    {
        "referenceNumber":0,
        "startDate":"2019-06-28 21:00:00",
        "endDate":"2019-06-28 23:00:00"
    },
    {
        "referenceNumber":0,
        "startDate":"2019-06-28 23:00:00",
        "endDate":"2019-06-29 00:00:00"
    },
    {
        "referenceNumber":"5d13d96367141585628984",
        "startDate":"2019-06-28 10:00:00",
        "endDate":"2019-06-28 11:00:00"
    },
    {
        "referenceNumber":"5d161cd76e18f854879481",
        "startDate":"2019-06-28 13:00:00",
        "endDate":"2019-06-28 15:00:00"
    },
    {
        "referenceNumber":"5d0d1d05bbe12593189358",
        "startDate":"2019-06-28 18:00:00",
        "endDate":"2019-06-28 21:00:00"
    }
]
```

## Raw Data
Only available via the API