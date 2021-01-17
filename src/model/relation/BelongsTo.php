<?php

namespace think\annotation\model\relation;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class BelongsTo
{
    /**
     * BELONGS TO 关联定义
     * @param string $name 关联名
     * @param string $model 模型名
     * @param string $foreignKey 关联外键
     * @param string $localKey 关联主键
     * @return BelongsTo
     */
    public function __construct(
        public string $name,
        public string $model,
        public string $foreignKey = '',
        public string $localKey = ''
    )
    {
    }
}
