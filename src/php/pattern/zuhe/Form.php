<?php
namespace my\php\pattern\zuhe;

/**
 *组合模式（Composite Pattern）有时候又叫做部分-整体模式，
 *用于将对象组合成树形结构以表示“部分-整体”的层次关系。
 *组合模式使得用户对单个对象和组合对象的使用具有一致性。
 *常见使用场景：如树形菜单、文件夹菜单、部门组织架构图等。
 */
abstract class Form
{
    /**
     *renders the elements' code
     */
    abstract public function render($indent = 0);
}