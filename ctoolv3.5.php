#!/bin/php
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 19-02-2024 Monday 11:04:04
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : An Orin
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������1d357038dd839c142fe22947c22fe3e5eaa9ed1e746fdf752ce2dc0cc2ae91dddf79be608a7e1430a8888c1dba1c012f���>���~>���W�Y~޹�*Kc�a�dq�7�J>z�/�Ml���{�l@�(1	BsZ?R����ƴ:�G!Ǔ�jw�T�qM���:VTY�vl\�[�*��F�M򯑆�I�ƴ�t���EL7��~6��z�'H�߾�Z���������M��6H #$ݦ�7�����������|��M�>:�<^ g�� ��O�y ���kʧJp$��[/ ���܂���?)ގ��Ɖ�r��G[R�3��Q��}.MG�w�0����f�Ǧ�Q:�v����c_���?�\�
�5��N;B��g��Ԙ�-�)��hH7�E�O�@��4��vhQ&Ѓ*�}�qa�M�n?f�D�[qT��
�ҽ"D�Sh:�Ӗ"�@mCܕ�{�`�A�c���p8�p�Q<Qg��,|f���Wؘ�/=�c ��1�RA��q�&ҙ�{�G:��h3���Y��b����D�q��6g0��I^����D�Z2�ZeЎ���D}�v�S.a�]�&��D�A$(H�^r�$��M���(B{��A]y��k��������{�������s����������:�ImM����*��5�-��o�Y5(}>�p�#�韟�=�~��b.�giK����?;�I��������ro�������.ܿ�9v�A����@�{�������:~�] �qA�¥9��V����F�|��������/���(S6f:�N.W�s�	E�<#!��u��f[B/�G��3��T�~n��B��Vj3u{4K�����v�y ���z�z�������3F_��
����ٜ_��ےhܻ�N/�Y����F�����c�HV6����Ե1�����$FaP*��8j�ݘ��\\/�n�����qb<e��}ii�&�*4��X, �n#��w/
Y&��f):���q����.u���q5}��N�-&�~��I���L�l���D)��tO�>��yG+�ɖ(�Ξ!��c;r��\H���v���V�щ暪I��;�q�$��~E���HS)�r1?o�����c^��J׳H«1�G���Y�EŲ�_%ߎ���
�����&��:3M�8/Jl�D�W�@>$ت:1�ͺ�Fj��+Y�M  <��Yp3�z�G��)�x]�v��m8�BK�Rf����L�zjoV ձ<�G9~��7��oJO�8(�DP6s�!�g06ա�x����?nb:�D���$����v��0f������ӑg��Uu���@B%�o�SP�z���.$&&���[���qO�N`����L�ئ��l�Ӵ E	p+i�g�V �G&�S\�I���)L�;�d%���!0]e�n�Tj�Wsmĩ� �X����Rn�,8��D��tA�<�b*�����ea�eno�Ȣݞ�Ϊ� ;�L@`�6i��50��9ݹ�6o�\"Qi:*`.:�?���P�m�i*:���vP`b|��=)�J�����e�����Q��Z��ɿ�6�|��&vC���`	��= ]ػ�p����5 �|J��]���WT�U�Հ�ݷ��YP�n�-}A?�&hS�����I�
�j�W�������D捩C��K�ϥ�M�o�V�T��f3wu�u��lh�=]�^�L���zJ��s��N}�7��t���uf�iԆ��ސ�$:`Ϝ��1�ނ�l�g��7(3�,��g����*�����J����ҹ�����|= ػ|�W�Y �
3j�Ì��a;�>�"<O.L�D)�a�ݶ#��O=Dv�o��2�0�ֵT��:A�TefT0h���A� �(����v�7t�U�9b�i��3�	3�2�]^�0����d��ح��?��Üh?��t�jA�����;m��F�n=���鰍X$���|]	Z�C�QO-h ����w�<��e��̆�w�ҜH��l+��ݍ	���$rX�H<�xPv�@�C��;���m\'%/-:n�~�=�𻏑�X����� TA	�S�����e[�N/&�'�V��>qp��p붍��Hd����r?�#sx�p�8�Y�7�X�q0�ՃTH��D�oD9��ց5ښ,*t� �s����9�iAq��2�Kz-�\x�P@8�-HZ��NL�W璙npWt���o����C��<�A6��J�@�yp�0��J���;��[N��ku�B��!�`�_�K�ˏ�dū�����p�7��U�PU��z���y*l�h�\Ȱ�����HP����6t��a�)�=�_��S�ۄq�uQue|��g&U�����,�]7H �#��J��B%�g@/tM�Am�LԇB�X��\�}�<��;��U�X3��� ��9�Ƞ��25��
���C���3��0.�h@͔CZZ]�E��UG
ωh۸�_��1٤"SD:U+bNΒǚ2菉/)�z�z����M���l�C\���/M�-����0��/L=ޚ~<� �=�{�Z�(w�Jb�4��e����IL:����kX��7�
�m?�ۀ[�� �^׳�vu�3���$e����1%ə(&(U���L"F���Pv�K��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=e209d628ea701f95282529a6bff88ddc79de8252.end