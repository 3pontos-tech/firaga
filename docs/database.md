# Database Structure

This document outlines the database structure for the LaraCrowd application. It includes tables for user management,
financial information, investment profiles, startups, and offers. This structure supports the crowdfunding platform's
core functionality, enabling user registration, investment management, and startup offer administration.

## User Management

### Users Table

The Users table stores essential information about registered platform users, including administrators, investors, and
other account types. This is the central table for user identity and authentication.

| Column            | Type      | Description                                                     |
|-------------------|-----------|-----------------------------------------------------------------|
| id                | uuid      | Primary key identifier for the user                             |
| name              | string    | User's full name displayed throughout the platform              |
| username          | string    | Unique identifier/code for easy reference                       |
| email             | string    | User's email address (unique) used for login and communications |
| password          | string    | Encrypted password for secure authentication                    |
| email_verified_at | timestamp | When the user's email was verified to confirm account ownership |

**Operations:**

- Create: Register a new user in the system
- Read: Retrieve user information for profile display and authentication
- Update: Modify user details such as name or email
- Delete: Remove a user from the system when requested

### User Financial Table

The User Financial Table stores information about a user's financial status and investment capacity. This data helps
determine appropriate investment opportunities and ensures compliance with financial regulations.

| Column            | Type    | Description                                                           |
|-------------------|---------|-----------------------------------------------------------------------|
| id                | uuid    | Primary key identifier for the financial record                       |
| user_id           | uuid    | References users.id to link financial data to a specific user         |
| annual_income     | integer | User's annual income in the platform's base currency                  |
| net_worth         | integer | User's total net worth used to assess investment capacity             |
| investment_amount | integer | Amount the user has declared available for investment on the platform |

**Operations:**

- Create: Store user's financial information during registration or profile completion
- Read: Retrieve financial details for investment eligibility assessment
- Update: Update financial information when user circumstances change

### User Investment Profiles Table

The User Investment Profiles Table stores information about a user's investment preferences, risk tolerance, and
investment knowledge. This helps match users with appropriate investment opportunities.

| Column       | Type    | Description                                                           |
|--------------|---------|-----------------------------------------------------------------------|
| user_id      | uuid    | References users.id (Primary key) linking profile to a specific user  |
| profile_type | string  | Type of investment profile (e.g., conservative, moderate, aggressive) |
| score        | integer | Investment profile score calculated based on user's answers           |
| answers      | json    | User's answers to profile questions stored as structured JSON data    |

**Operations:**

- Create: Store a user's investment profile during onboarding
- Read: Retrieve profile information to recommend appropriate offers
- Update: Update profile based on new answers when the user retakes assessment

### User Address Table

The User Address Table stores the physical address information for each user, which is necessary for legal compliance,
verification, and communication purposes.

| Column       | Type   | Description                                                   |
|--------------|--------|---------------------------------------------------------------|
| user_id      | uuid   | References users.id (Primary key) linking address to a user   |
| address      | string | Street address where the user resides                         |
| neighborhood | string | Neighborhood or district within the city                      |
| city         | string | City of residence                                             |
| state        | string | State/Province of residence                                   |
| country      | string | Country of residence                                          |
| zipcode      | string | Postal/ZIP code for mail delivery                             |
| number       | string | House/Building number for precise location                    |
| complement   | string | Additional address information like apartment number or floor |

**Operations:**

- Create: Store a user's address during registration or profile completion
- Read: Retrieve address information for verification or shipping
- Update: Update address details when the user relocates

### User Details Table

The User Details Table stores additional personal information about users that is required for KYC (Know Your Customer)
compliance, identity verification, and personalized user experience.

| Column         | Type   | Description                                                        |
|----------------|--------|--------------------------------------------------------------------|
| user_id        | uuid   | References users.id (Primary key) linking details to a user        |
| phone_number   | string | User's contact telephone number for verification and notifications |
| gender         | string | User's gender for demographic information                          |
| document_id    | string | ID document (RG) for identity verification                         |
| tax_id         | string | Tax identification (CPF) for legal compliance and tax reporting    |
| birthdate      | date   | Date of birth for age verification and demographic analysis        |
| job_position   | string | Current job position for user profiling                            |
| marital_status | string | Marital status for demographic information                         |

**Operations:**

- Create: Store user's personal details during registration or profile completion
- Read: Retrieve personal information for verification or reporting
- Update: Update personal details when user information changes

### User Connections Table

The User Connections Table manages links between platform user accounts and external systems or services, enabling
single sign-on functionality and data synchronization with external platforms.

| Column          | Type   | Description                                                  |
|-----------------|--------|--------------------------------------------------------------|
| user_id         | uuid   | References users.id linking connection to a specific user    |
| connection_type | string | Type of external connection (google/crm) for authentication  |
| connection_id   | string | ID from the external connection system for cross-referencing |

**Operations:**

- Create: Link a user to an external account during registration or profile management
- Read: Retrieve connection information for authentication or data synchronization
- Delete: Remove connection when user revokes access or changes external accounts

### Banking Table

The Banking Table stores users' banking information necessary for processing withdrawals, deposits, and other financial
transactions on the platform. This polymorphic table can be linked to different entity types.

| Column     | Type   | Description                                                       |
|------------|--------|-------------------------------------------------------------------|
| model_type | string | Type of model (user) for polymorphic relationship                 |
| model_id   | uuid   | References id in the model type table (e.g., users.id)            |
| bank       | string | Bank name where the account is held                               |
| agency     | string | Bank agency/branch number for transaction routing                 |
| account    | string | Account number for deposits and withdrawals                       |
| pix_key    | string | PIX payment key for instant Brazilian payment system transactions |

**Operations:**

- Create: Store banking information during user onboarding or account setup
- Read: Retrieve banking details for processing financial transactions
- Update: Update banking information when user changes bank accounts
- Delete: Remove banking information when no longer needed or upon user request

## Startup Management

### Startup Table

The Startup Table stores information about companies and projects seeking funding through the platform. This table
contains the core details about each startup entity that can create investment offers.

| Column            | Type   | Description                                                    |
|-------------------|--------|----------------------------------------------------------------|
| id                | uuid   | Primary key identifier for the startup                         |
| slug              | string | Unique identifier/code for easy reference                      |
| name              | string | Startup company name displayed to investors                    |
| tax_id            | string | Tax identification number for legal compliance                 |
| description       | text   | Full detailed description of the startup's business and vision |
| short_description | string | Brief description used in listings and previews                |
| segment           | string | Business segment or industry category for filtering            |

**Operations:**

- Create: Register a new startup in the platform
- Read: Retrieve startup information for display and verification
- Update: Modify startup details when company information changes
- Delete: Remove a startup when it's no longer active on the platform

### Startup Offers Table

The Startup Offers Table stores investment opportunities created by startups. Each offer represents a funding round with
specific terms, durations, and return expectations that investors can participate in.

| Column                    | Type      | Description                                                    |
|---------------------------|-----------|----------------------------------------------------------------|
| id                        | uuid      | Primary key identifier for the offer                           |
| startup_id                | uuid      | References startup.id linking the offer to a specific startup  |
| slug                      | string    | Unique identifier/code for easy reference                      |
| name                      | string    | Offer name/code (e.g., BOV123) for easy reference              |
| offer_starting_at         | timestamp | When the offer starts accepting investments                    |
| offer_ending_at           | timestamp | When the offer stops accepting new investments                 |
| risk_level                | integer   | Risk level classification (1-4) to inform investors            |
| roi                       | integer   | Expected return on investment percentage                       |
| min_investment            | integer   | Minimum investment amount accepted for this offer              |
| max_investment            | integer   | Maximum investment amount accepted from a single investor      |
| withdraw_percentage_limit | integer   | Maximum percentage of investment that can be withdrawn at once |
| withdrawal_periodicity    | string    | How often withdrawals are allowed (monthly, quarterly, etc.)   |
| withdrawal_grace_period   | integer   | Grace period (in days) before investors can make withdrawals   |

**Operations:**

- Create: Create a new investment offer for a startup
- Read: Retrieve offer details for display to potential investors
- Update: Modify offer information before or during the investment period
- Delete: Remove an offer that has been canceled or completed

### Startup Offers Settings Table

The Startup Offers Settings Table controls the visibility and behavior of investment offers on the platform. These
settings determine which users can see offers and how contract documents are managed.

| Column            | Type    | Description                                                             |
|-------------------|---------|-------------------------------------------------------------------------|
| offer_id          | uuid    | References startup_offers.id (Primary key) linking settings to an offer |
| active            | boolean | Whether the offer is currently active and accepting investments         |
| visible           | boolean | Whether the offer is visible to all users browsing the platform         |
| visible_on_logged | boolean | Whether the offer is visible only to logged-in users                    |
| document_type     | string  | Type of contract document system used (docuseal/docusign)               |
| document_id       | string  | ID of the contract template in the document provider system             |

**Operations:**

- Create: Configure initial offer settings when creating a new offer
- Read: Retrieve settings to determine offer visibility and document handling
- Update: Modify settings to change offer visibility or document configuration

## User Investments

### User Offers Table

The User Offers Table tracks individual investments made by users in specific startup offers. This table represents the
core investment relationship between users and offers, including payment status and investment amounts.

| Column            | Type    | Description                                                           |
|-------------------|---------|-----------------------------------------------------------------------|
| id                | uuid    | Primary key identifier for the user investment                        |
| offer_id          | uuid    | References startup_offers.id linking to the specific investment offer |
| user_id           | uuid    | References users.id identifying the investor                          |
| status            | enum    | Investment status (not_paid, active, terminated, finished)            |
| slug              | string  | Unique identifier/code for easy reference                             |
| investment_amount | integer | Amount invested by the user in the platform's base currency           |
| payment_date      | date    | Date when the initial investment payment was made                     |
| paid              | boolean | Payment status flag (0-not paid, 1-paid) for quick filtering          |

**Operations:**

- Create: Record a user's new investment in an offer, either manually or through the platform
- Read: Retrieve investment details for reporting, dashboard display, and financial calculations
- Update: Update investment status when payments are confirmed or when the investment status changes

### User Offer Operations Table

The User Offer Operations Table records all financial transactions related to user investments, including initial
deposits, yield payments, and withdrawals. This table provides a complete audit trail of all money movements.

| Column         | Type      | Description                                                        |
|----------------|-----------|--------------------------------------------------------------------|
| id             | uuid      | Primary key identifier for the operation                           |
| user_id        | uuid      | References users.id identifying the investor                       |
| user_offer_id  | uuid      | References user_offers.id linking to the specific investment       |
| status         | enum      | Operation status (pending, paid, canceled) for tracking            |
| operation      | enum      | Type of operation (withdrawal, deposit) indicating money direction |
| value          | integer   | Operation amount in the platform's base currency                   |
| operation_date | timestamp | When the operation occurred or was scheduled                       |
| reference      | string    | Reference identifier for bank reconciliation                       |
| metadata       | json      | Additional operation data such as bank details or notes            |

**Operations:**

- Create: Record a new financial operation such as a deposit or withdrawal request
- Read: Retrieve operation details for financial reporting and user history
- Update: Update operation status when payments are processed or canceled

## Filesystem DB: Spatie Media Library

The Spatie Media Library is used to manage file uploads and media attachments in the application. It provides a
consistent way to handle file storage, including images, documents, and other media types.


