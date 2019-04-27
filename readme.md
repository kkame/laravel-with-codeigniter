# 소개

이 프로젝트는 codeigniter에서 laravel로 전환하는 중간 단계에서 활용할 만한 예제를 정리하기 위한 공간입니다

## 개념

codeigniter는 네임스페이스를 사용하지 않고 `get_instance()`를 통해 어디서든 자신의 싱글턴 객체를 호출 할 수 있고

laravel은 네임스페이스를 사용하며 `app()`을 통해 어디서든 자신의 객체를 호출 할 수 있기 때문에

이를 활용하면 두개의 프레임워크가 서로의 코어에 침범하지 않고 상호간의 소스코드를 사용 할 수 있다는 개념으로 출발합니다 

### 설치

일반적으로 이 과정은 codeigniter가 이미 먼저 사용되고 있고 laravel로의 전환을 (반대의 경우는 사실상 없다고 가정) 하기 때문에 

codeigniter가 이미 설치된 상태에서 라라벨의 base 파일들을 덮어 씌우는 과정으로 진행됩니다. 

이 과정에서 기존의 codeigniter가 이미 composer를 사용하고 있었다면 laravel에 관련된 내용이 업데이트 될 수 있도록 합니다.

- laravel을 별도 폴더에 설치
- 생성된 파일을 기존의 폴더로 복사
- composer.json 병합
- composer update
- index.php 수정 (현재 프로젝트의 public 폴더 참조)
  - index.php # 라라벨에서 ci를 사용하기 위한 소스
  - ci_core.php #순수한 ci가 동작하기 위한 소스
  - ci_with_laravel.php #ci에서 라라벨을 사용하기 위한 소스
- .htaccess 또는 nginx 파일 수정
  - 특정 url을 단위로 ci나 laravel이 우선동작하길 원한 경우 이에 맞게 수정

- laravel에서 codeigniter를 호출 할 경우 codeigniter에서 존재하지 않는 url로 인해 404 응답을 반환하지 않기 위해 routes.php 파일을 수정하여 응답이 없는 빈 컨트롤러를 동작시킵니다.

### 중요 사항

- 각 프레임워크는 MVCS 구조를 통해 도메인 로직을 컨트롤러에 존재하지 않도록 합니다.

## Used Template

[webuni](https://colorlib.com/wp/template/webuni/)
