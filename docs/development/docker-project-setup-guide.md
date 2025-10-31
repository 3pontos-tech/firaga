# Project Setup Guide

This guide will help you set up and run the project using Docker Compose.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

* **Docker Desktop:** If you are on Windows/MacOS This includes Docker Engine and Docker Compose. Ensure WSL 2 backend is enabled if you are on Windows.

* **Git:** For cloning the repository.

* **WSL (Windows Subsystem for Linux):** If you are on Windows, ensure WSL 2 is installed and your default distribution is set to WSL 2.

## Getting Started

Follow these steps to get your project up and running:

### 1. Clone the Repository

First, clone the project repository to your local machine:

```
git clone [YOUR_REPOSITORY_URL]
cd [YOUR_PROJECT_DIRECTORY]
```

### 2. Environment Configuration

Create your `.env` file based on the example provided. This file contains crucial environment variables for your application.

```
cp .env.example .env
```

**Important:** Open the newly created `.env` file and ensure the following variables are correctly configured for your local development:

```
APP_URL=[http://firaga.test](http://firaga.test)
APP_DOMAIN=firaga.test
SESSION_DOMAIN=.firaga.test # Crucial for subdomain sessions
```

### 3. Build and Run Docker Containers

Navigate to your project root directory (where `docker-compose.yml` is located) in your terminal (preferably within your WSL distribution if on Windows, or directly on Linux/macOS).

Build the Docker images and start the services in detached mode:

```
docker-compose up --build -d
```

* The `--build` flag ensures that your Docker images are built from scratch, incorporating any recent Dockerfile changes.

* The `-d` flag runs the containers in the background.

### 4. Add Host Entries (Crucial for Local Domains)

Our application uses custom domains (`firaga.test` and `lp.firaga.test`). You need to add these entries to your system's `hosts` file so your browser can resolve them to your local Docker environment.

**For macOS and Linux Users:**

A helper script `add_hosts_entries.sh` is provided for this purpose.

1.  **Execute the script on your HOST system (macOS/Linux Terminal with `sudo`):**

    ```
    # Navigate to your project directory on your host machine
    cd [YOUR_PROJECT_DIRECTORY]
    chmod +x add_hosts_entries.sh
    sudo ./add_hosts_entries.sh
    ```

    * This script will add `127.0.0.1 firaga.test` and `127.0.0.1 lp.firaga.test` to your `hosts` file. You will be prompted for your password.

**For Windows Users (Manual Method):**

1.  **Open PowerShell as Administrator:** Search for "PowerShell" in your Windows Start Menu, right-click, and select "Run as administrator".

2.  **Navigate to the `hosts` file directory:**
    Assuming PowerShell starts in `C:\Windows\System32`, navigate to the `drivers\etc\` directory:
    ```powershell
    cd drivers\etc\
    ```

3.  **Edit the `hosts` file:**
    Open the `hosts` file using Notepad (which will open with administrator privileges since PowerShell was opened as admin):
    ```powershell
    notepad hosts
    ```

4.  **Add the domain entries:**
    Inside the `hosts` file, add the following lines at the end:
    ```
    127.0.0.1 firaga.test
    127.0.0.1 lp.firaga.test
    ```

5.  **Save and Close:** Save the changes (`Ctrl+S`) and close Notepad.

2.  **Flush DNS Cache (Important!):**

    After modifying the `hosts` file, it's crucial to clear your system's DNS cache to ensure the changes take effect immediately.

    * **macOS:**

        ```
        sudo dscacheutil -flushcache; sudo killall -HUP mDNSResponder
        ```

    * **Linux (with systemd):**

        ```
        sudo systemctl restart systemd-resolved || sudo systemctl restart NetworkManager
        ```

    * **WSL (Windows Subsystem for Linux):**
        Open **PowerShell or Command Prompt as Administrator** on your Windows host and run:

        ```
        wsl --shutdown
        ```

        This command will shut down all running WSL distributions. They will restart automatically when you next access them.

    * **Windows (Host):**
        Open **PowerShell or Command Prompt as Administrator** on your Windows host and run:

        ```
        ipconfig /flushdns
        ```

### 5. Access the Application

Once all containers are up and running, and your `hosts` file/DNS cache is updated, you can access your application in your web browser:

* **Main Domain:** `http://firaga.test`

* **Landing Page Subdomain:** `http://lp.firaga.test`

### 6. Laravel Cache & Permissions (If you encounter issues)

If you encounter unexpected behavior, such as authentication issues or old content being displayed, clear Laravel's internal caches:

```
docker-compose exec php php artisan cache:clear
docker-compose exec php php artisan config:clear
docker-compose exec php php artisan route:clear
docker-compose exec php php artisan view:clear
```

If you face any permission denied errors (e.g., related to logs or cache), ensure your `entrypoint.sh` is correctly applying permissions as `root`.

### 7. X Debug

Check xdebug.launch.json on examples folder, if you are a VSCode user this is may be helpful to run X Debug in Docker + Vscode.

## Troubleshooting

* **"Permission denied" errors:** Ensure you've followed the UID/GID synchronization steps in the `Dockerfile.dev` and that your `entrypoint.sh` handles `chown` and `chmod` as `root` before switching users. Rebuild the `php` image (`docker-compose build --no-cache php`) if you make changes to the Dockerfile.

* **Domain not resolving:** Double-check your `hosts` file and make sure you flushed your DNS cache on your host system.