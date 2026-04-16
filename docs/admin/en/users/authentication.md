---
title: Authentication
icon: heroicon-o-lock-closed
order: 4
---
# Authentication

How user authentication and access control works in Sycorax.

## Logging In

Access the admin panel at `/admin/login`. Enter your **email** and **password** to log in.

> **Note:** In non-production environments (development, staging), the login form may be pre-filled with demo credentials for convenience.

## Who Can Access the Panel

Only users with the **Super Administrator** role can access the admin panel. If you cannot log in, contact your system administrator to verify your role assignment.

## Sessions

Your login session is managed automatically. You can view and manage your active browser sessions from the **My Profile** page under the **Browser Sessions** section. If you see a session you don't recognize, you can revoke it immediately.

## Password Security

Passwords must meet minimum security requirements. You can update your password at any time from your **Profile** page. You will need to confirm your current password before setting a new one.

## Impersonation

Administrators can temporarily log in as another user to troubleshoot issues or verify what that user sees. This is done from the **Users** list by clicking the **Impersonate** action on any user row.

While impersonating:
- A banner appears at the top of the page indicating you are impersonating someone
- Click the banner to **stop impersonating** and return to your own session
- All actions performed are logged under the impersonated user's account
