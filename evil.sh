#!/bin/bash

addusr() {
    read -p "Username: " user
    adduser --force-badname $user
    passwd $user
    echo "User has been created"

    mkdir /filesystems/$user
    dd if=/dev/zero of=/filesystems/$user/$user.filesystem bs=1M count=64
    mkfs.ext4 /filesystems/$user/$user.filesystem
    mount -o loop /filesystems/$user/$user.filesystem /home/$user
    #chown -R $user:$user /filesystems/$user/
    echo "File system for $user has been created"
    mkdir /home/$user/public_html
    cp /var/www/userstuff/default_index.html /home/$user/
    cp /var/www/userstuff/Templates/ /home/$user/
    chown -R $user:$user /home/$user/public_html
    chmod 755 /home/$user
    chmod 755 /home/$user/public_html
    echo "Dir has been created and perm has been set \n done"
    
    mkdir /home/$user/.ssh
    nano /home/$user/.ssh/authorized_keys
    echo "Added SSH key"
    chmod 700 /home/$user/.ssh/ && chmod 600 /home/$user/.ssh/authorized_keys 
    chown -R  $user:$user  /home/$user/.ssh/
    echo "Completed permission change"

    echo "Copying default files"
    cp /var/www/userstuff/default_index.html /home/$user/public_html
    echo "Copied default html"
    cp /var/www/userstuff/readme.evil /home/$user/public_html
    echo "Copied all files"
    chown -R $user:$user /home/$user/
    echo "User added, he is now on evil at evil.site/~$user"
}


removeusr() {
    read -p "Username: " user
    echo "User is being terminated"
    passwd --lock $user
    killall -9 -u $user
    umount /home/$user
    umount /home/$user
    umount /home/$user
    rm -r /home/$user
    #mkdir /user-backups/
    #tar jcvf /user-backups/$user-home-directory-backup.tar.bz2 /home/$user
    deluser --remove-home $user
    #rm -r /home/$user
    rm -r /filesystems/$user/
    echo "Removed all"
}


lockssh() {
    vim /etc/ssh/sshd_config
    service sshd restart
}


usercheck() {
    for a in `users`; do echo `ac $a` $a; done|sort|uniq|cut -d' ' -f2,3|sort -n
}

main() {
    PS3='Choose what you would like to do: '
    options=("Add user" "Remove user" "SSH Lock" "User time" "Quit")
    select opt in "${options[@]}"; do
        case $opt in
            "Add user")
                addusr
                ;;
            "Remove user")
                removeusr
                ;;
            "SSH Lock")
                lockssh
                ;;
            "User time")
                usercheck
            break
                ;;
        "Quit")
            echo "Leaving evil.sh"
            exit
            ;;
            *) echo "invalid option $REPLY";;
        esac
    done
}

main
