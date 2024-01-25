# API STATUS #
All enndpoint operating normally

# Concordia University Open Data API
Technology has allowed Concordia to collect large amounts of data and information on a variety of topics, which the university feels should be accessible to all. Concordia’s open data makes machine-readable data easy to access from a single point and free to reuse without copyright, patents or other restrictions.

## Recent Changes
* March 2021 - Added waste methods waste_types, bin_types, and invoices to facilities endpoint
* December 2019 - Added buildinglist method to facilities endpoint
* July 2019 - Ported documentation to markdown
* July 2019 - New Facilities endpoint

## New here?
If you're new to our open data API then you should take a minute to consult our [Getting Started](getting_started.md) page.

## Requests

Want to request a new data set? Interested in submitting your own dataset? Want to submit a project? Contact help@concordia.ca

## Endpoints
Below you'll find links to the documentation page for each endpoints' methods.

### Courses
Daily course data export from the Student Information System (SIS) system.
* [/course/catalog](v1/courses/catalog.md)
* [/course/description](v1/courses/description.md)
* [/course/section](v1/courses/section.md)
* [/course/schedule](v1/courses/schedule.md)
* [/course/sessions](v1/courses/sessions.md)
* [/course/faculty](v1/courses/faculty.md)
* [/course/experiential_learning](v1/courses/experiential_learning.md)
* [/course/scheduleTerm](v1/courses/scheduleTerm.md)

### Facilities
Daily and historical environmental and consumption data obtained from sensors and meters located on both campuses.
* [/facilities/pointlist](v1/facilities/pointlist.md)
* [/facilities/buildinglist](v1/facilities/buildinglist.md)
* [/facilities/consumption](v1/facilities/consumption.md)
* [/facilities/environmental](v1/facilities/environmental.md)

Data pertaining to Concordia's Zero Waste Program
* [/facilities/waste/waste_types](v1/facilities/waste/waste_types.md)
* [/facilities/waste/bin_types](v1/facilities/waste/bin_types.md)
* [/facilities/waste/invoices](v1/facilities/waste/invoices.md)

### Library
Live data on the current status of some of the Library services and events.

* [/library/hours](v1/library/hours.md)
* [/library/events](v1/library/events.md)
* [/library/computers](v1/library/computers.md)
* [/library/occupancy](v1/library/occupancy.md)
* [/library/room_list](v1/library/room_list.md)
* [/library/reservations](v1/library/reservations.md)

## License

These services are licensed un the [Creative Commons Attribution 4.0 International Public License](https://creativecommons.org/licenses/by/4.0/legalcode).  Please make sure you have read and understood the terms of this license if you plan on building services on this data.
