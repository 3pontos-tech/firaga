# Implementation Plan

- [ ] 1. Set up database schema and models
  - Create migration for user_consultant junction table
  - Create migration for consultant_payments table
  - Create UserConsultant model with relationships
  - Create ConsultantPayment model with enums and relationships
  - Update existing User model with consultant relationships and panel access method
  - Update existing Consultant model with payment relationships
  - _Requirements: 1.1, 1.2, 2.1_

- [ ] 2. Create payment status and provider enums
  - Create PaymentStatus enum with PENDING, EXPIRED, CANCELLED, PAID, REFUNDED values
  - Create PaymentProvider enum with abacatepay value
  - _Requirements: 3.3, 6.6_

- [ ] 3. Implement consultant panel infrastructure
  - Create ConsultantPanelServiceProvider with proper configuration
  - Register consultant panel in application service providers
  - Configure panel routing, authentication, and middleware
  - _Requirements: 2.1, 2.2, 2.3, 2.4_

- [ ] 4. Create payment resource for consultant panel
  - Create PaymentsResource in Filament/Consultant/Resources directory
  - Implement table view with filtering and sorting capabilities
  - Configure form fields for payment creation
  - Add status badges and payment link display
  - _Requirements: 3.1, 3.2, 3.3, 3.5, 5.1, 5.2, 5.3, 5.4, 5.5_

- [ ] 5. Implement CRM integration service
  - Create CrmIntegrationService for external CRM communication
  - Implement method to fetch consultant opportunities by external_id
  - Add client data extraction from CRM leads
  - Handle CRM API errors gracefully with fallback options
  - _Requirements: 4.1, 4.2, 4.3, 4.4, 6.4_

- [ ] 6. Create payment provider service
  - Create abstract PaymentProviderService interface
  - Implement AbacatePayService for payment link generation
  - Add payment status synchronization methods
  - Implement webhook handling for payment updates
  - _Requirements: 3.3, 3.4, 5.3, 6.1, 6.2, 6.3, 7.1, 7.2, 7.3, 7.4, 7.5_

- [ ] 7. Enhance payment resource with CRM integration
  - Modify PaymentsResource create page to integrate with CRM service
  - Add client selection and auto-population functionality
  - Implement manual CPF entry field as required by consultants
  - Add validation for payment data before submission
  - _Requirements: 4.1, 4.2, 4.3, 4.4, 4.5_

- [ ] 8. Implement user-consultant association management
  - Add consultant association functionality to admin panel
  - Create interface for administrators to link users to consultants
  - Implement User model canAccessPanel method with consultant validation
  - Add proper authorization checks for consultant panel access
  - _Requirements: 1.1, 1.2, 1.3, 1.4, 2.1, 2.2, 2.3, 2.4_

- [ ] 9. Add payment tracking and status management
  - Implement payment status update mechanisms
  - Create webhook endpoints for payment provider notifications
  - Add CRM synchronization for completed payments
  - Implement audit trail for payment status changes
  - _Requirements: 5.1, 5.2, 5.3, 5.4, 5.5, 6.1, 6.2, 6.3, 6.5_

- [ ]* 10. Create comprehensive test suite
  - Write unit tests for models, services, and business logic
  - Create feature tests for payment creation and CRM integration
  - Add integration tests for multi-panel authentication
  - Implement browser tests for complete user workflows
  - _Requirements: All requirements validation_

- [ ]* 11. Add security and performance optimizations
  - Implement proper data encryption for sensitive payment information
  - Add rate limiting for external API calls
  - Create caching strategy for CRM data
  - Add comprehensive logging and monitoring
  - _Requirements: Security and performance considerations_