<?php

namespace think\annotation\model\relation;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class BelongsToMany
{
    /**
     * BELONGS TO MANY 关联定义
     * @param string $name 关联名
     * @param string $model 模型名
     * @param string $middle 中间表/模型名
     * @param string $foreignKey 关联外键
     * @param string $localKey 当前模型关联键
     */
    public function __construct(
        public string $name,
        public string $model,
        public string $middle = '',
        public string $foreignKey = '',
        public string $localKey = ''
    )
    {
    }
}
