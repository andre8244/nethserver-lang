<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Přiřazení IP adres';
$L['bootproto_none_label'] = 'Statické';
$L['blue_label'] = 'Guests (blue)';
$L['device_label'] = 'Zařízení';
$L['gateway_label'] = 'Brána';
$L['green_label'] = 'LAN (green)';
$L['hwaddr_label'] = 'MAC adresa';
$L['ipaddr_label'] = 'IP adresa';
$L['orange_label'] = 'DMZ (orange)';
$L['Key_label'] = 'Zařízení';
$L['netmask_label'] = 'Maska sítě';
$L['NetworkAdapter_Description'] = 'Change network settings';
$L['NetworkAdapter_Tags'] = 'network adapter ethernet networks';
$L['NetworkAdapter_Title'] = 'Síť';
$L['red_label'] = 'Internet (red)';
$L['role_label'] = 'Role';
$L['update_header_label'] = 'Aktualizovat zařízení';
$L['interface-config_label'] = 'Nastavení rozhraní';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP can be used only with red interfaces";
$L['valid_platform,interface-config,interface-role,4'] = "Cannot delete the last green interface";
$L['No'] = 'Ne';
$L['Yes'] = 'Ano';
$L['type_alias_label'] = 'Alias';
$L['type_bridge_label'] = 'Most';
$L['type_bond_label'] = 'Bond';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configure IP assignment - ${0}';
$L['CreateLogicalInterface_label'] = 'Nové rozhraní';
$L['CreateLogicalInterface_header'] = 'Nové logické rozhraní';
$L['vlanTag_label'] = 'Značka (tag)';
$L['vlan_label'] = 'Rozhraní';
$L['InterfaceType_label'] = 'Typ';
$L['Next_label'] = 'Další';
$L['Back_label'] = 'Zpět';
$L['Edit_label'] = 'Upravit';
$L['Edit_header'] = 'Edit ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Link status is \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nMac address \${mac}";
$L['Link_status_up'] = 'up';
$L['Link_status_down'] = 'down';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Rychlost ${0}';
$L['Confirm_header'] = 'Create ${role} interface ${device}';
$L['Action_create_bridge'] = 'Create a new bridge interface ${device} with ${parts}';
$L['Action_create_bond'] = 'Create a new bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Create a new VLAN interface ${device} on ${parts}';
$L['Action_create_role'] = 'Set role to "${role}"';
$L['Action_set_static_ip'] = 'Set static IP ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Obtain IP configuration from DHCP server';
$L['Action_use_gateway'] = 'Použít bránu ${gateway}';
$L['Action_use_no_gateway'] = 'Nenastavovat bránu';
$L['Create_label'] = 'Vytvořit rozhraní';
$L['bridged_label'] = 'Přemostěné';
$L['slave_label'] = 'Podřízené';
$L['CreateIpAlias_header'] = 'Create IP alias "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Vydání ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Release role ${role} assigned to physical interface ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Remove ${device} from bond ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Remove ${device} from bridge ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Smazat';
$L['DeleteLogicalInterface_header'] = 'Confirm deletion of ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Deleting bond interface \${device}.\nPick a successor from its slave interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_bridge_message'] = "Deleting bridge interface \${device}.\nPick a successor from the bridged interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_vlan_message'] = "Confirm deletion of VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirm deletion of alias \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Poznámky k vydání';
$L['Release_label'] = 'Poznámky k vydání';
$L['CleanPhysicalInterface_label'] = 'Smazat';
$L['CreateIpAlias_label'] = 'Create IP alias';
$L['successor_label'] = 'Successor';
$L['NoSuccessor_label'] = 'None';
$L['bond_label'] = 'Bond';
$L['bridge_label'] = 'Most';
$L['alias_label'] = 'Alias';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Assign roles to physical interfaces';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Fyzická rozhraní';
$L['CleanPhysicalInterface_header'] = 'Odebrat ${0}';
$L['Confirm device ${0} removal'] = 'Remove ${0} device from the database?';
$L['Clean_label'] = 'Odebrat';
$L['Refresh_label'] = 'Zjistit aktuální stav spojení';
$L['roleis_label'] = 'role';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Model ${0}';
$L['All roles are correctly assigned to network cards.'] = 'All roles are correctly assigned to network cards.';
$L['type_xdsl_label'] = 'PPPoE on ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Uživatelské jméno';
$L['PppoePassword_label'] = 'Heslo';
$L['PppoeInterface_label'] = 'Ethernetové rozhraní';
$L['PppoeProvider_label'] = 'Poskytovatel';
$L['pppoe_label'] = 'PPPoE (red)';
$L['SetPppoeParameters_label'] = 'Nastavit PPPoE';
$L['SetPppoeParameters_header'] = 'Nastavit PPPoE zařízení ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Release PPPoE red role from \${device}?\nThe associated ppp0 device will be also removed.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remove the logical PPPoE device ppp0?";
$L['valid_pppoe_already_configured'] = 'The PPPoE device ppp0 is already configured';
$L['valid_pppoe_red_role_only'] = 'The PPPoE device ppp0 must be assigned the red role';
$L['PppoeAuthType_label'] = 'Typ ověřování';
$L['AuthType_auto'] = 'Automatické';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';