<?php if(c("MainForm")->alphaBlendValue>250)
{
    c("starter")->enabled=false;
    c("MainForm")->alphaBlendValue=255;
    c("MainForm")->alphaBlend=false;
}
else c("MainForm")->alphaBlendValue+=3;
