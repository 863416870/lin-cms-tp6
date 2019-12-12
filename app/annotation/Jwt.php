<?php
declare (strict_types = 1);

namespace app\annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * class Jwt
 * @package app\annotation
 * @Annotation
 * @Target({"METHOD"}) # 不需要进行类注解去掉"CLASS"，不需要方法注解去掉"METHOD"
 */
final class Jwt extends Annotation
{
}
