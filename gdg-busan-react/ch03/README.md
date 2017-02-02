## Chapter 03

### 1. Excel 컴포넌트 만들기 (1) : 테이블 헤더
* headers 의 column 만큼 th 생성
* React 에서 식별할수있도록 Excel 객체에 'displayName' 프로퍼티 할당
* React 에서 식별할수있도록 th 객체에 'key' 프로퍼티 할당
* 종료

### 2. Excel 컴포넌트 만들기 (2) : 테이블 바디
* 데이터의 row 만큼 tr 생성
* 각 데이터 row 의 column 만큼 td 생성
* 종료

### 3. Excel 컴포넌트 만들기 (3) : 단순 정렬
* 테이블헤더 클릭시, \_sort() 호출
* 정렬기준 열번호에 해당되는 데이터 추출
* 추출한 데이터 전후 비교 정렬 (큰 값을 높은인덱스로)
* 정렬된 데이터를 component.state.data 에 반영
* 변경된 데이터(열번호)만 렌더링
* 종료

### 4. Excel 컴포넌트 만들기 (4) : 오름차순 내림차순 정렬
* 테이블헤더 클릭시, \_sort() 호출
* 정렬기준 열번호에 해당되는 데이터 추출
* component.state.descending 에서 정렬규칙 추출
* 정렬규칙이 오름차순일때, 데이터 전후 비교 정렬 (큰 값을 높은인덱스로)
* 정렬규칙이 내림차순일때, 데이터 전후 비교 정렬 (큰 값을 낮은인덱스로)
* 정렬된 데이터를 component.state.data 에 반영
* 변경된 데이터(열번호)만 렌더링
* 종료

### 5. Excel 컴포넌트 만들기 (5) : 편집모드
* 셀 더블클릭하면, \_showEditor() 호출
* component.state 에 더블클릭위치 저장
* component.state 에 편집모드시작 저장
* 상태값변경으로 인한 컴포넌트 렌더링 시작
* 상태값에 저장되어있는 더블클릭위치에 입력박스 생성
* 입력박스에서 enter 이벤트발생시, \_save() 호출
* 입력박스값을 component.state.data 에 반영
* component.state 에 편집모드종료 저장
* 종료

### 6. Excel 컴포넌트 만들기 (6) : 검색
* 검색버튼 클릭하면, \_toggleSearch() 호출
* component.state 검색모드시작 저장 (토글, 한번더클릭하면 검색모드종료 저장)
* 상태값변경으로 인한 컴포넌트 렌더링 시작
* tbody 에서 \_renderSearch() 호출
* 검색입력박스 생성
* 검색입력박스에 문자열 입력하면, \_search() 호출
* 원본데이터 저장
* 현재데이터중에서 검색입력박스 위치 열번호 데이터만 검색문자열로 필터링
* 검색결과데이터를 현재데이터로 갱신
* 검색입력박스 문자열이 모두 삭제되면, \_search() 호출
* 원본데이터 복원
* 종료

### 7. Excel 컴포넌트 만들기 (7) : 변경내역 재생
* 생명주기함수 componentDidMount() 로 키보드리스너 등록 (ALT+SHIFT+R)
* setState() 를 \_logSetState() 로 래핑
* 컴포넌트 상태값을 변경내역과 함께 저장
* 키보드단축키 입력되면, \_replay() 호출
* 변경내역에 저장되어있는 컴포넌트 상태값을 1초단위로 적용 (=재생효과)
* 종료

### 8. Excel 컴포넌트 만들기 (8) : 내려받기
* 다운로드링크 클릭하면, \_download() 호출
* 컴포넌트 상태값을 json/csv 문자열로 구성
* 재구성한 문자열로 blob 객체 생성
* blob 객체를 현재경로에 등록
* 등록된 blob 경로를 a 태그 경로에 연결
* a 태그 경로 요청
* 파일 다운로드
* 종료