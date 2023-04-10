# com.graydigitalgroup.committees

![Screenshot](/images/screenshot.png)

(*FIXME: In one or two paragraphs, describe what the extension does and why one would download it. *)

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.4+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.graydigitalgroup.committees@https://github.com/FIXME/com.graydigitalgroup.committees/archive/master.zip
```
or
```bash
cd <extension-dir>
cv dl com.graydigitalgroup.committees@https://lab.civicrm.org/extensions/com.graydigitalgroup.committees/-/archive/main/com.graydigitalgroup.committees-main.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/com.graydigitalgroup.committees.git
cv en committees
```
or
```bash
git clone https://lab.civicrm.org/extensions/com.graydigitalgroup.committees.git
cv en committees
```

## Getting Started

Once this is installed, you will have a new Menu item `Committees` listed in the CiviCRM menu. Under this menu item you can then manage the `Committees`, `Committee Roles` and `Committee Appointments`. Each page will list out the current records along with allowing you to create new records.

There is also a new tab added to the Contact Summary page in which you can manage the appointments for a given contact or add new appointments for a contact.

[Future work](docs/future-work.md)

## Known Issues

See [issues](github/graydigitalgroup/com.graydigitalgroup.committees/issues)
