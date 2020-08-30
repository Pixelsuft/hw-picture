<?php global $sx, $sy, $fx, $fy;
$sx = cursor_pos_x();
$sy = cursor_pos_y();
$fx = c('MainForm')->x;
$fy = c('MainForm')->y;
c('MainForm->mover')->enable = true;
