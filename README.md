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

(* FIXME: Where would a new user navigate to get started? What changes would they see? *)

## Known Issues

When editing a committee through the modal window, it isn't wanting to populate the two html fields.
When adding a committee appointment on the contact tab, the Contact field is not populating based on the current contact record. [issue 4110](https://lab.civicrm.org/dev/core/-/issues/4110)
