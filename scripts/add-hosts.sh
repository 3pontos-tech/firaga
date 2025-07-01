#!/bin/bash

HOSTS_FILE="/etc/hosts"
IP_ADDRESS="127.0.0.1"

DOMAINS=(
    "firaga.test"
    "lp.firaga.test"
)

echo "Checking and adding entries to $HOSTS_FILE..."

for DOMAIN in "${DOMAINS[@]}"; do
    if grep -q "$IP_ADDRESS $DOMAIN" "$HOSTS_FILE"; then
        echo "The entry for $DOMAIN already exists."
    else
        echo "Adding $IP_ADDRESS $DOMAIN..."
        echo "$IP_ADDRESS $DOMAIN" | sudo tee -a "$HOSTS_FILE" > /dev/null
        if [ $? -eq 0 ]; then
            echo "Entry for $DOMAIN added successfully."
        else
            echo "Error adding entry for $DOMAIN. Please check your permissions."
        fi
    fi
done

echo "Finished."
echo "You might need to clear your system's DNS cache."
echo "  - macOS: sudo dscacheutil -flushcache; sudo killall -HUP mDNSResponder"
echo "  - Linux (distros with systemd): sudo systemctl restart systemd-resolved || sudo systemctl restart NetworkManager"
echo "  - WSL (Windows Subsystem for Linux): Open PowerShell/CMD as Administrator and run: wsl --shutdown (this will shut down all running WSL distros and restart them on next use)"
echo "  - If you are using WSL Docker Desktop, WSL Docker Desktop needs to be restarted to apply changes."