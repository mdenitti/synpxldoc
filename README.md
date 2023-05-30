# SyntraPXL Teacher Portal


![enter image description here](https://www.syntrapxl.be/themes/custom/sassy/assets/images/syntra/logo.svg)

**Project Description and Requirements**

## Public:

The purpose of this application is to create a portal that displays teachers on an OpenStreetMap, along with an extensive search function. The personal data of the teachers will be limited to common fields that fall within the scope of GDPR (General Data Protection Regulation). These fields include fullName, location, description, and a contact button, which allows users to send an email to the teacher. Teachers will have the ability to register themselves through a publicly accessible form.

## Admin:

The admin section of the portal requires a dashboard with authentication. CRUD (Create, Read, Update, Delete) operations are needed to manage the teachers, locations, and pages. The teachers' profiles will remain locked until an admin approves their application. To streamline the CRUD operations, authorization, and authentication processes, it is recommended to use Voyager.

## Sprint backlog items:

**User Registration:**

 - Create a publicly accessible registration form for teachers.
  - Implement validation and error handling for registration inputs.
  - Store registered teacher data securely in the database.

**Teacher Profile: (OPTIONAL)**

- Design and implement a teacher profile page.
- Enable teachers to edit and update their profile information.
- Implement data privacy measures to ensure GDPR compliance.

**OpenStreetMap Integration:**

- Integrate OpenStreetMap API to display teachers' locations on a map.
- Develop a search function to filter and locate teachers based on criteria.
- Implement markers or pins to indicate the locations of teachers on the map.

**Contact Functionality:**

- Add a contact button on each teacher's profile for users to send emails.
 - Implement an email service to handle and deliver contact messages.
- Ensure proper security measures to protect user data and prevent spam.

**Admin Dashboard:**

- Develop an authentication system for admin access to the dashboard.
- Create CRUD functionality for managing teachers, locations, and pages.
- Implement admin approval process for unlocking teacher profiles.

**Voyager Integration:**

- Integrate Voyager into the project for faster CRUD operations.
- Configure Voyager to handle authorization and authentication.
- Customize the admin interface for seamless management of data.

**Testing and Quality Assurance:**

- Create test cases and perform comprehensive testing of all functionalities.
- Implement error logging and monitoring for effective issue resolution.
- Conduct usability testing to ensure a user-friendly experience.

**GDPR Compliance:**

- Review and update data handling processes to comply with GDPR regulations.
- Implement privacy settings for teachers to control their data visibility.
- Provide options for data deletion upon user request or expiration.

**Performance Optimization: (TELESCOPE)**

- Conduct performance analysis and optimize database queries and API calls.
- Implement caching mechanisms to improve response times.
- Optimize the application's codebase and reduce unnecessary overhead.

**Documentation and Deployment:**

- Create detailed documentation for installation, configuration, and usage.
- Prepare deployment scripts and guidelines for smooth deployment.
- Set up a continuous integration and deployment pipeline for future updates