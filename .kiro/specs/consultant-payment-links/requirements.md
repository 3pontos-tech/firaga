# Requirements Document

## Introduction

This feature enables consultants to generate payment links for their clients through a dedicated Filament admin panel. The system integrates with CRM data to auto-populate client information and tracks payment status through external payment providers like AbacatePay.

## Glossary

- **Consultant_System**: The payment link generation system for consultants
- **Admin_Panel**: The main Filament admin interface for system administrators
- **Consultant_Panel**: The dedicated Filament panel for consultant users at /consultants
- **Payment_Provider**: External payment service (AbacatePay)
- **CRM_System**: Customer relationship management system containing client data
- **Payment_Link**: Generated URL that clients use to complete payments
- **User_Consultant**: Junction table linking system users to consultant records

## Requirements

### Requirement 1

**User Story:** As a system administrator, I want to manage consultant access to the payment system, so that only authorized consultants can generate payment links.

#### Acceptance Criteria

1. THE Admin_Panel SHALL provide functionality to link system users to consultant records
2. WHEN an administrator creates a user-consultant relationship, THE Consultant_System SHALL store the association in the user_consultant table
3. THE Consultant_System SHALL prevent unauthorized access to the consultant panel for users without consultant associations
4. THE Consultant_System SHALL maintain referential integrity between users and consultants

### Requirement 2

**User Story:** As a consultant, I want to authenticate into a dedicated panel, so that I can access payment generation tools specific to my role.

#### Acceptance Criteria

1. THE Consultant_System SHALL provide a dedicated authentication interface at /consultants
2. WHEN a user attempts to access the consultant panel, THE Consultant_System SHALL verify the user has an associated consultant record
3. IF a user lacks consultant association, THEN THE Consultant_System SHALL deny access to the consultant panel
4. THE Consultant_System SHALL maintain separate session management for the consultant panel

### Requirement 3

**User Story:** As a consultant, I want to create payment requests for my clients, so that I can collect payments for consulting services.

#### Acceptance Criteria

1. THE Consultant_System SHALL provide a PaymentsResource interface for creating payment requests
2. WHEN creating a payment request, THE Consultant_System SHALL require consultant_id, amount, and payment provider selection
3. THE Consultant_System SHALL generate unique payment URLs through the selected Payment_Provider
4. THE Consultant_System SHALL store payment requests with PENDING status by default
5. THE Consultant_System SHALL associate each payment request with the authenticated consultant

### Requirement 4

**User Story:** As a consultant, I want client information to be automatically populated from CRM data, so that I can quickly create accurate payment requests.

#### Acceptance Criteria

1. WHEN a consultant selects a client, THE Consultant_System SHALL query the CRM_System using the consultant's external_id
2. THE Consultant_System SHALL retrieve client opportunities from the CRM_System
3. THE Consultant_System SHALL extract lead information including full name, phone, email from CRM data
4. THE Consultant_System SHALL auto-populate payment form fields with retrieved client data
5. THE Consultant_System SHALL allow manual CPF entry as this field requires consultant input

### Requirement 5

**User Story:** As a consultant, I want to track payment status, so that I can monitor which clients have completed their payments.

#### Acceptance Criteria

1. THE Consultant_System SHALL display payment status for all consultant payment requests
2. THE Consultant_System SHALL support status values: PENDING, EXPIRED, CANCELLED, PAID, REFUNDED
3. WHEN payment status changes at the Payment_Provider, THE Consultant_System SHALL update the local payment record
4. THE Consultant_System SHALL provide filtering and sorting capabilities for payment records
5. THE Consultant_System SHALL display payment creation date and amount for each record

### Requirement 6

**User Story:** As a system administrator, I want payment data to be synchronized with the CRM system, so that sales records remain consistent across platforms.

#### Acceptance Criteria

1. WHEN a payment status changes to PAID, THE Consultant_System SHALL update the corresponding CRM opportunity
2. THE Consultant_System SHALL track payment provider information including provider_id and payment_url
3. THE Consultant_System SHALL maintain audit trail of payment status changes
4. THE Consultant_System SHALL handle CRM synchronization failures gracefully without blocking payment processing
5. THE Consultant_System SHALL support multiple payment providers through a provider enum system

### Requirement 7

**User Story:** As a consultant, I want to offer multiple payment methods to clients, so that clients can choose their preferred payment option.

#### Acceptance Criteria

1. THE Consultant_System SHALL support payment method selection during payment request creation
2. THE Payment_Provider SHALL provide available payment methods for each payment request
3. THE Consultant_System SHALL validate payment method compatibility with the selected provider
4. THE Consultant_System SHALL display available payment methods to clients on the payment page
5. THE Consultant_System SHALL track the selected payment method for completed transactions